<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\SellsRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index')
            ->with('products', Product::get());
    }

    public function show($id)
    {
        return view('product.show')
            ->with('product', Product::find($id));
    }

    public function showSellForm()
    {
        /*$categories = PrimaryCategory::query()
            ->with([
                'secondaryCategories' => function ($query) {
                    $query->orderBy('sort_no');
                }
            ])
            ->orderBy('sort_no')
            ->get();
        $conditions = ItemCondition::orderBy('sort_no')->get();
                */
        return view('product.sell');
    }

    public function sellItem(SellsRequest $request)
    {
        $imageName = $this->saveImage($request->file('item-image'));

        $item                        = new Product();
        $item->image                 = $imageName;
        $item->name                  = $request->input('name');
        $item->description           = $request->input('description');
        $item->price                 = $request->input('price');
        $item->save();

        //return redirect()->back();
    }

    /**
     * 商品画像をリサイズして保存します
     *
     * @param UploadedFile $file アップロードされた商品画像
     * @return string ファイル名
     */
    private function saveImage(UploadedFile $file): string
    {
        $tempPath = $this->makeTempPath();

        Image::make($file)->fit(300, 300)->save($tempPath);

        $filePath = Storage::disk('public')->putFile('item-images', new File($tempPath));

        return basename($filePath);
    }

    /**
     * 一時的なファイルを生成してパスを返します。
     *
     * @return string ファイルパス
     */
    private function makeTempPath(): string
    {
        $tmp_fp = tmpfile();
        $meta   = stream_get_meta_data($tmp_fp);
        return $meta["uri"];
    }
}

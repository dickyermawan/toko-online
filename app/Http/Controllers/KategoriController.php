<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // Bahasan Eloquent

    // all()
    /*
        Category::all();

        akan menghasilkan array, jika tabel kosong, maka returnnya array kosong
    */
    
    // find()
    /*
        Category::find(1);

        akan menghasilkan single row, select berdasarkan primary key
    */
    
    // first()
    /*
        Category::where('status', 'active')->first();

        akan menghasilkan single row, select row pertama, biasanya setelah select where
    */
    
    // findOrFail()
    /*
        Category::findOrFail(1);

        Method findOrFail() bekerja mirip dengan find(), bedanya saat tidak ada row yang ditemukan maka 
        akan otomatis melempar Error Model Not Found alias 404, bereda dengan find() yang mengembalkan 
        nilai NULL jika row tidak ditemukan dengan id sesuai parameter.
     */
    
    // aggragates
    /*
        count()

        max()
                Product::all()->max("price");

        min()
                Product::all()->min("price");
                
        sum()
                Product::all()->sum("price");
                
        avg()
                Product::all()->avg("price");

     */
    
    // insert row
    /*
        save()
                $product_baru = new Product;
                $product_baru->name = "Sepatu Coder";
                $product_baru->description = "Deskripsi produk sepatu coder";
                $product_baru->save();

        create()
                cara lain untuk membuat record
                PENTING! Apa yang dilakukan oleh method create() adalah menggunakan cara mass-assignment, 
                method create bisa kita pakai, kita harus definisikan dulu properti apa saja dari model Product 
                yang boleh untuk operasi mass-assignment. Kita telah mempelajarinya pada sub bab mass-assignment.

                $product_tas = Product::create([
                    "name" => "Tas Selempang Army",
                    "description" => "Deskripsi tas selempang army",
                ]);        
     */
    
    // update row
    /*
        save()
                // select dari tabel products dengan ID 20
                $produk_untuk_diupdate = Product::findOrFail(20);

                // ubah nilai description dari record yang kita dapatkan
                $produk_untuk_diupdate->description = "Deskripsi kita ubah di sini";

                // simpan perubahan ke database untuk product dengan ID 20 tadi
                $product_untuk_diupdate->save();
        
        update()
                App\Product::where("status", "active")->update(["status" => "inactive"]);
     */
    
    // delete row
    /*
        delete()
                $product = Product::findOrFail(21);
                $product->delete();

        destroy()
                hapus banyak row

                // hapus product yang memiliki ID 22
                App\Product::destroy(22);

                // hapus product dengan ID 23,25,31
                App\Product::destroy([23, 25, 21]);

                // cara ini bekerja persis seperti cara sebelumnya
                App\Product::destroy(23, 25, 21);
     */
    
    // soft deletes()
    /*
        delete()
                $product = Product::findOrFail(21);
                $product->delete();

        destroy()
                hapus banyak row

                // hapus product yang memiliki ID 22
                App\Product::destroy(22);

                // hapus product dengan ID 23,25,31
                App\Product::destroy([23, 25, 21]);

                // cara ini bekerja persis seperti cara sebelumnya
                App\Product::destroy(23, 25, 21);
     */

    //untuk softdeletes

    // trashed()
    /*
        $product = App\Product::findOrFail(23);
        if($product->trashed()){
        // ya product sedang berada di tempat sampah / soft deleted
        }
    */

    // restore()
    /*
        // cari produk di tabel products dengan ID == 23
        // jika gagal lempar error 404
        $product = App\Product::findOrFail(23);

        // jika ketemu dan statusnya soft deleted (trashed)
        // restore
        if($product->trashed()){
            $product->restore();
        }
     */

    // withTrashed()
    /*
        // select dengan di tong sampah
        
        $product = App\Product::where("owner", 12)->withTrashed()->get();

     */

    // onlyTrashed()
    /*
        // select hanya di tong sampah
        
        $product_trashed = App\Product::where("owner", 12)->onlyTrashed()->get();


     */

    // Data Pagination
    /*
        simplePaginate()
                        return view("products.list", ["products"=>\App\Product::simplePaginate(25)]);

        paginate()
                        return view("products.list", ["products" => \App\Product::paginate(25)]);


        

     */


}

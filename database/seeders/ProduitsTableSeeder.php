<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() { 
      //Produits tendance
            $produit=new \App\Models\Produit();
            $produit->nom ="Chemise relaxed fit";
            $produit->description="chemise relaxed fit pour homme";
            $produit->prix="249";
            $produit->reference="1";
            $produit->photo="product-1.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="249";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();

            $produit=new \App\Models\Produit();
            $produit->nom ="Pantalon cargo";
            $produit->description="Pantalon cargo pour homme";
            $produit->prix="299";
            $produit->reference="2";
            $produit->photo="product-2.jpg";
            $produit->stock="150";
            $produit->prix_achat="99";
            $produit->prix_vente="299";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();

            $produit=new \App\Models\Produit();
            $produit->nom ="Short relaxed";
            $produit->description="Short relaxed pour homme";
            $produit->prix="299";
            $produit->reference="1113";
            $produit->photo="product-3.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="299";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();

            $produit=new \App\Models\Produit();
            $produit->nom ="Pantalon cardo";
            $produit->description="Pantalon cargo pour homme";
            $produit->prix="299";
            $produit->reference="4";
            $produit->photo="product-4.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="299";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();

            $produit=new \App\Models\Produit();
            $produit->nom ="Crop top simple";
            $produit->description="Crop top simple pour fille";
            $produit->prix="199";
            $produit->reference="5";
            $produit->photo="product-5.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="199";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();

            $produit=new \App\Models\Produit();
            $produit->nom ="Crop top";
            $produit->description="Crop top pour fille";
            $produit->prix="199";
            $produit->reference="6";
            $produit->photo="product-6.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="199";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();

            $produit=new \App\Models\Produit();
            $produit->nom ="Ensemble pour enfant";
            $produit->description="Ensemble pour enfant";
            $produit->prix="349";
            $produit->reference="7";
            $produit->photo="product-7.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="349";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();

            $produit=new \App\Models\Produit();
            $produit->nom ="Robe pour fille";
            $produit->description="Robe pour fille";
            $produit->prix="149";
            $produit->reference="";
            $produit->photo="product-.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="149";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();

            //Vient d'arriver

            $produit=new \App\Models\Produit();
            $produit->nom ="T-shirt oversize pour enfant";
            $produit->description="T-shirt oversize pour enfant";
            $produit->prix="149";
            $produit->reference="9";
            $produit->photo="productarr1-.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="149";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();

            $produit=new \App\Models\Produit();
            $produit->nom ="T-shirt smiley pour fille";
            $produit->description="T-shirt smiley pour fille";
            $produit->prix="199";
            $produit->reference="10";
            $produit->photo="productarr-2.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="199";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();

            $produit=new \App\Models\Produit();
            $produit->nom ="T-shirt imprimé pour jeune";
            $produit->description="T-shirt imprimé pour jeune";
            $produit->prix="199";
            $produit->reference="11";
            $produit->photo="productarr3-.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="199";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();

            $produit=new \App\Models\Produit();
            $produit->nom ="T-shirt simple pour jeune";
            $produit->description="T-shirt simple pour jeune";
            $produit->prix="199";
            $produit->reference="12";
            $produit->photo="productarr4-.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="199";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();
            
            $produit=new \App\Models\Produit();
            $produit->nom ="Chemise relaxed fit pour jeune";
            $produit->description="Chemise relaxed fit pour jeune";
            $produit->prix="249";
            $produit->reference="13";
            $produit->photo="productarr5-.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="249";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();

            $produit=new \App\Models\Produit();
            $produit->nom ="Chemise relax fit pour jeune";
            $produit->description="Chemise relax fit pour jeune";
            $produit->prix="249";
            $produit->reference="14";
            $produit->photo="productarr6-.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="249";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();

            $produit=new \App\Models\Produit();
            $produit->nom ="Short cargo pour jeune";
            $produit->description="Short cargo pour jeune";
            $produit->prix="149";
            $produit->reference="15";
            $produit->photo="productarr7-.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="149";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();

            $produit=new \App\Models\Produit();
            $produit->nom ="ShORT";
            $produit->description="ShORT";
            $produit->prix="199";
            $produit->reference="16";
            $produit->photo="productarr8-.jpg";
            $produit->stock="100";
            $produit->prix_achat="99";
            $produit->prix_vente="199";
            $produit->type_prix="TTC";
            $produit->remarque="Disponible en stock";
            $produit->save();
  }
        
    
}

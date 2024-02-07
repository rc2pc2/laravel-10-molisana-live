<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $recipesList =  array(
            "Pancakes con sciroppo d'acero",
            "French Toast (Pain Perdu)",
            "Croissant con marmellata",
            "Waffle con frutta fresca e panna montata",
            "Ciambella Glassata",
            "Muffin alle Mele e Cannella",
            "Crepe con Nutella e Banane",
            "Torta di Carote",
            "Frittelle di Banana",
            "Crepes Suzette",
            "Biscotti al Cioccolato",
            "Brioche alla Crema",
            "Crumble alle Mele",
            "Torta al Cioccolato",
            "Scone con crema di limone",
            "Donuts Glassati",
            "Milkshake alla Vaniglia",
            "Torta di Compleanno",
            "Strudel di Mele",
            "Torta di Ricotta",
            "Pudding al Cioccolato",
            "Zeppole di San Giuseppe",
            "Torta di Frutta Fresca",
            "Babka al Cioccolato",
            "Crostata di Marmellata",
            "Spaghetti alla Carbonara",
            "Lasagne al Forno",
            "Risotto ai Funghi",
            "Parmigiana di Melanzane",
            "Pizza Margherita",
            "Tagliatelle al Ragù",
            "Tiramisù",
            "Cotoletta alla Milanese",
            "Pasta al Pesto",
            "Insalata Caprese",
            "Bistecca Fiorentina",
            "Gnocchi alla Sorrentina",
            "Cannoli Siciliani",
            "Frittata di Verdure",
            "Minestrone",
            "Polpette al Sugo",
            "Bruschetta",
            "Panna Cotta",
            "Arancini di Riso",
            "Tortellini in Brodo",
            "Cacciucco",
            "Ossobuco alla Milanese",
            "Torta di Mele",
            "Zuppa di Pesce",
            "Caponata Siciliana"
        );


        foreach ( $recipesList as $recipeName) {
            $recipe = new Recipe();
            $recipe->name = $recipeName;
            $recipe->description = $faker->paragraphs(4, true);
            $recipe->image = $faker->imageUrl(400,600, 'food');
            $recipe->complexity = $faker->numberBetween(1, 10);
            $recipe->preparation_time = $faker->numberBetween(5, 3000);
            $recipe->cooking_time = $faker->numberBetween(5, 1440);
            $recipe->save();
        }
    }
}

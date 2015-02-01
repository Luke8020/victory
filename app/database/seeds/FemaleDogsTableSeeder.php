<?php

use Victory\Entities\Dog;
use Victory\Entities\Picture;

class FemaleDogsTableSeeder extends Seeder {

	public function run()
	{
        /*
        |--------------------------------------------------------------------------
        | Females
        |--------------------------------------------------------------------------
        */

        // Pedigree x 4
        Dog::create([
            'name' => 'Gracie',
            'breed' => "Victory's Blue View of Willowrun",
            'is_male' => 0,

            // First Generation
            'm' => "Victory's Magic In The Moonlight", 'd' => "Willowrun's Blue Bias",

            // Second Generation
            'mm' => "Neo Nexus v't Buitengebeuren", 'md' => "Victory's Fantam Fury",
            'dm' => "Legend von haus Tiefenbach", 'dd' => "Neala Willowrun vom Romersee",

            // Third Generation Maternal
            'mmm' => "Efendi v't Buitengebeuren", 'mmd' => "Fran Fine v't Buitengebeuren",
            'mdm' => "Blue Moon's True Lies Victory", 'mdd' => "Victorys Black Velvet Cntyrn",

            // Third Generation Paternal
            'dmm' => "Nahbay vom Haus Tiefenbach ", 'dmd' => "Ashanti von haus Tiefenbach", 
            'ddm' => "Blue Balou v't. Buitengebeuren ", 'ddd' => "Gina vom Romersee",

            // Fourth Generation Maternal
            'mmmm' => "Nahbay vom Haus Tiefenbach ", 'mmmd' => "Velvet Queen v't Buitengebeuren",
            'mmdm' => "Blue Balou v't. Buitengebeuren", 'mmdd' => "Wichita v't. Buitengebeuren",

            'mdmm' => "Victorys Countryrun V Wlwrn", 'mdmd' => "Macy's Glory of Blue Moon CD TT",
            'mddm' => "Countryrun Montague Wil-Lox", 'mddd' => "Januarys' Blue Victory Tabu",

            // Fourth Generation Paternal
            'dmmm' => "Zyrus Von der Schlehhecke", 'dmmd' => "Gheza de la Chatellerie",
            'dmdm' => "Barry vom Dreilandereck", 'dmdd' => "Quitsou von haus Tiefenbach",

            'ddmm' => "Yordache v'd. Buitengebeuren", 'ddmd' => "Wichita v't. Buitengebeuren",
            'dddm' => "Erchino v Lion's Cottage", 'dddd' => "Ninja v't. Buitengebeuren"
        ]);

        // Pedigree x 4
        $dog = Dog::create([
            'name' => 'Ebonee',
            'breed' => "Victory's Ebonee See The Light",
            'is_male' => 0,
            
            // First Generation
            'm' => "Lotosdanes Bravo", 'd' => "Victory's Trinity",

            // Second Generation
            'mm' => "Orkhan de la Benjamine", 'md' => "Oceane du val de L'Amitie",
            'dm' => "Am Intl. CH Ramacs N Excess V Hauer ", 'dd' => "Qutie Willowrun v.t. Buitengebeuren",

            // Third Generation Maternal
            'mmm' => "Milton del Eden Blue", 'mmd' => "Meloukhia de la Benjamine",
            'mdm' => "Querkopf von Haus Fresena", 'mdd' => "Jeremie du val de l'Amitie",

            // Third Generation Paternal
            'dmm' => "M.J.B. Hauerdane's Mr. Coffee", 'dmd' => "Brana's Queen of Spades", 
            'ddm' => "Yac v'd Schlehhecke", 'ddd' => "Lena vom Romersee",

            // Fourth Generation Maternal
            'mmmm' => "Elyston-B II Paradiso Di Bella", 'mmmd' => "Joyce Blue Du Castel de la Roche Aux Fees",
            'mmdm' => "Cheleborn", 'mmdd' => "Enthea de la Benjamine",

            'mdmm' => "Onegin von der Burg Diana", 'mdmd' => "Findelkind von Haus Fresena",
            'mddm' => "Querkopf von Haus Fresena", 'mddd' => "Helodie du val de l'Amitie",

            // Fourth Generation Paternal
            'dmmm' => "BIS BISS CH Longo's Primo D'Aquino", 'dmmd' => "CH Jc's Antigua's Sweet Revenge",
            'dmdm' => "Brana's Strut Your Stuff", 'dmdd' => "Brana's Black Orchid",

            'ddmm' => "Lino v'd Schlehhecke", 'ddmd' => "Raina-Lisa von der Schlehhecke",
            'dddm' => "Efendi v't Buitengebeuren", 'dddd' => "Gina vom Romersee"
        ]);

        foreach(range(1, 3) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }

        // Pedigree x 4
        $dog = Dog::create([
            'name' => 'Evita',
            'breed' => "Evita vom Blauen See",
            'is_male' => 0,
            'about' => 'Owned and Loved by Victoria Pearson',
            
            "m" => "Avid-Arne vom Blauen See", "d" => "Zamora vom Blauen See", "mm" => "Zentro v. Vogtlandeck", "md" => "Aneas Adyss", "dm" => "Gordon Canis Canum", "dd" => "Mira v. Borntal", "mmm" => "Frey v. d. Ofnethöhle", "mmd" => "Oxana v. Vogtlandeck", "mdm" => "Gromyko vom Blauen See", "mdd" => "Anett Borojo", "dmm" => "Belzebub Canis Canum", "dmd" => "Angelina Canis Canum", "ddm" => "Gromyko vom Blauen See", "ddd" => "Hexe v. Borntal", "mmmm" => "Ramses v.d.Ofnethöhle", "mmmd" => "Herra v.f. Shilo Ranch", "mmdm" => "Janos v.d. Bärenhaut", "mmdd" => "Littlelady v. Vogtlandeck", "mdmm" => "Bismarck vom Blauen See", "mdmd" => "Orphèe du Val de l`Amitie", "mddm" => "Enzio z Akyty ", "mddd" => "Asca Peichluv ranc", "dmmm" => "Frey v. d. Ofnethöhle", "dmmd" => "Vanessa v. Köpfelgrund", "dmdm" => "Caballero v. Saphir", "dmdd" => "Vannessa v. Köpfelgrund", "ddmm" => "Bismarck vom Blauen See", "ddmd" => "Orphèe du Val de l`Amitie", "dddm" => "Arras v. Borntal", "dddd" => "Cora v. Borntal"
        ]);

        foreach(range(1, 1) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }

        // Pedigree x 4
        $dog = Dog::create([
            'name' => 'JolieJolie',
            'breed' => "JolieJolie Dei Monti Del Keraton",
            'is_male' => 0,
            'about' => 'Owned by Victoria Pearson',
            "m" => "Uxalanda de la Benjamine", "d" => "Elisha-B Dei Monti del Keraton", "mm" => "Shamaco de la Benjamine", "md" => "Saratoustra de la Benjamine", "dm" => "Duncan-B Dei Monti Del Keraton", "dd" => "Olympia de la Benjamine", "mmm" => "Ferdjanni von der Nibelungenburg", "mmd" => "Nina de la Benjamine", "mdm" => "Plaisir-D'Amour des Habits Rouges", "mdd" => "Nijinskaia de la Benjamine", "dmm" => "Lifar de la Benjamine", "dmd" => "Cabvriablueice-B", "ddm" => "Milton del Eden Blue", "ddd" => "Meloukhia de la Benjamine", "mmmm" => "Darcy vom Leininger Land", "mmmd" => "Bjulah von der Nibelungenburg", "mmdm" => "Nahbay von Hause Tiefenbach", "mmdd" => "Leira de la Benjamine", "mdmm" => "Onegin V.D. Burg Diana", "mdmd" => "Findelkind V. Haus Fresena", "mddm" => "Nahbay vom Hause Tiefenbach", "mddd" => "Hiroshima de la Benjamine", "dmmm" => "Aljoahara-N Loi", "dmmd" => "Enthea de la Benjamine", "dmdm" => "Nahbay vom Hause Tiefenbach", "dmdd" => "Chantalblue-B", "ddmm" => "Elyston_B il Paradiso di Bella", "ddmd" => "Joyce Blue du Castel de la Roche", "dddm" => "Cheleborn-N", "dddd" => "Enthea de la Benjamine"
        ]);

        foreach(range(1, 1) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }

        // Pedigree x 3
        $dog = Dog::create([
            'name' => 'Odessa',
            'breed' => "Victory's Odyssey of the Fellowship",
            'is_male' => 0,
            'about' => 'Owned by Victoria Pearson - Victory Danes',
            "m" => "Victory's The Fellowship", "d" => "Freedom-B Dei Monti del Keraton", "mm" => "Legend von haus Tiefenbach", "md" => "Sailor Moon de la Benjamine", "dm" => "Mick Medium", "dd" => "Cabvriablueice", "mmm" => "Nahbay von haus Tiefenbach", "mmd" => "Ashanti von haus Tiefenbach", "mdm" => "Osir Della Baia Azzurra", "mdd" => "Najinskaia de la Benjamine", "dmm" => "Erchino Von Lions Cottage", "dmd" => "Nikita Medium", "ddm" => "Nahbay Von Hause Tiefenbach", "ddd" => "Chantal Blue"
        ]);

        foreach(range(1, 1) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }

        // Pedigree x 3
        $dog = Dog::create([
            'name' => 'Petunia',
            'breed' => "Victory's All About Me",
            'is_male' => 0,
            "m" => "Victory's Bacardi Breeze", "d" => "Victory's Play On Piper", "mm" => "Lotosdanes Bravo", "md" => "Evita vom Blauen See", "dm" => "Lotosdanes Bravo", "dd" => "Victory's Vivacious Valkyrie", "mmm" => "Orkhan de la Benjamine", "mmd" => "Oceane du val de L'Amitie", "mdm" => "Arvid-Arne vom Blauen See", "mdd" => "Zamora vom Blauen See", "dmm" => "Orkhan de la Benjamine", "dmd" => "Oceane du val de L'Amitie", "ddm" => "Kohinoor Just For Victory", "ddd" => "Victorys Rhythm Is A Dancer"
        ]);

        foreach(range(1, 1) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }

        // Pedigree x 3
        $dog = Dog::create([
            'name' => 'Rena',
            'breed' => "Renaisance V't Buitengebeuren",
            'is_male' => 0,
            "m" => "Ferdjanni Von Der Nibelungenburg (Blue)", "d" => "Kylie V't Buitengebeuren (Blue)", "mm" => "Darcy vom Leininger Land", "md" => "Bjulah v.d.Nibelungenburg", "dm" => "Wrangler v 't Buitengebeuren ", "dd" => "Wichita v 't Buitengebeuren ", "mmm" => "Terputanski's Lorbas ", "mmd" => "Dina von der Grester Lake ", "mdm" => "Hemingway vom Haus Tiefenbach ", "mdd" => "Dora vom Leininger Land ", "dmm" => "Elmar von Sankt Kilian", "dmd" => "CH Gracieëla v 't Buitengebeuren", "ddm" => "Milan von der Eremitage ", "ddd" => "Natalia v 't Buitengebeuren "
        ]);

        foreach(range(1, 1) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }

        // Pedigree x 3
        $dog = Dog::create([
            'name' => 'Sailor Moon',
            'breed' => "Sailor Moon de la Benjamine",
            'is_male' => 0,
            'about' => '(French Import - Kennel la Benjamine)',
            "m" => "Osir Della Baia Azzurra", "d" => "Nijinskaïa De La Benjamine", "mm" => "Milton Del Eden Blue", "md" => "Lucia Della Baia Azzurra", "dm" => "Nahbay Von Hause Tiefenbach", "dd" => "Hiroshima De La Benjamine", "mmm" => "Elyston Il Paradiso Di Bella", "mmd" => "Joyce Blue Du Castel De La Roche Aux Fees", "mdm" => "Ill Della Baia Azzurra", "mdd" => "Dasy Della Baia Azzurra", "dmm" => "Zyrus V.d. Schlehhcke", "dmd" => "Gheza De La Chatellerie", "ddm" => "Ilko Del Nord Ovest", "ddd" => "Enthea De La Benjamine"
        ]);

        foreach(range(1, 1) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }

        // Pedigree x 4
        $dog = Dog::create([
            'name' => 'Trinity',
            'breed' => "Victory's Trinity",
            'is_male' => 0,
            'about' => 'Co owned by Victory Great Danes and Willowrun Great Danes',
            "m" => "Am. Int. CH Ramacs N Excess v Hauer", "d" => "Qutie Willowrun vt' Buitengebeuren", "mm" => "M.j.b. Hauerdane's Mr. Coffee", "md" => "Brana's Queen of Spades", "dm" => " Yac vd Schlehhecke", "dd" => " Lena v Romersee", "mmm" => "CH Longo's Primo D'aquino", "mmd" => "CH Jc's Antigua's Sweet Revenge", "mdm" => "Brana's Strut Your Stuff", "mdd" => "Brana's Black Orchid", "dmm" => " Lino vd Schlehhecke", "dmd" => " Raina-Lisa vd Schlehhecke", "ddm" => " CH Efendi vt' Buitengebeuren", "ddd" => " Gina v Romersee", "mmmm" => "CH Longo's Chief Joseph", "mmmd" => "CH Aquino's Oso Perla Negra", "mmdm" => "Fantasia's Fawn Corleone", "mmdd" => "San Roque's Antiqua V Cylon", "mdmm" => "CH Haltmeier's Egoiste'", "mdmd" => "Scrimshaw's Nadia V Brana", "mddm" => "Bantry Taghollow Excaliber", "mddd" => "Schmshaw Take A Chance W Brana", "dmmm" => "Hemmingway v Haus Tiefenbach", "dmmd" => "Grit vd Schlehhecke", "dmdm" => "Nahbay v Haus Tiefenbach", "dmdd" => "Elderberry's April", "ddmm" => "Nahbay v Haus Tiefenbach", "ddmd" => "Velvet Queen vt' Buitengebeuren", "dddm" => "Erchino v Lion's Cottage", "dddd" => "Ninja vt' Buitengebeuren"
        ]);

        // Pedigree x 4
        $dog = Dog::create([
            'name' => 'Valkyrie',
            'breed' => "Victory's Vivacious Valkyrie",
            'is_male' => 0,
            'about' => '',
            "m" => "Kohinoor Just For Victory ", "d" => "Victory's Rhythm Is A Dancer ", "mm" => "Kohinoor Electric Shaka ", "md" => "Kohinoor Friski Zaire ", "dm" => "Victory's Countryrun v Wlwrn ", "dd" => "Thrill of Victory v Wlwrn ", "mmm" => "Calico Rock's Affirmed", "mmd" => "Victory's Image of Countryrun", "mdm" => "Victory's Countryrun v Wlwrn", "mdd" => "Kohinoor's Bit O'Honee ", "dmm" => "Countryrun Montague Wil-Lox", "dmd" => "Katie My Lady Willowrun", "ddm" => "CH Rachel's Ravon Pal V Willowrun", "ddd" => "Willowrun's Blue Cassandra"
        ]);

        foreach(range(1, 2) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }
		
	}

}
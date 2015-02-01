<?php

use Victory\Entities\Dog;
use Victory\Entities\Picture;

class MaleDogsTableSeeder extends Seeder {

	public function run()
	{
        /*
        |--------------------------------------------------------------------------
        | Males
        |--------------------------------------------------------------------------
        */

        // Pedigree x 3
        $dog = Dog::create([
            'name' => 'Asher',
            'breed' => "",
            'is_male' => 1,
             "m" => "Questeur vom Hause Wagner", "d" => "Ultima Victory v't Buitengebeuren ", "mm" => "Saphyr de l'Orangerie des Perles Rares", "md" => "Sigmata de la Benjamine", "dm" => "Stinger v't Buitengebeuren ", "dd" => "Querida v't Buitengebeuren ", "mmm" => "Ferdjanni von der Nibelungenburg ", "mmd" => "Orphee du Val de l'Amitie ", "mdm" => "Osir Della Baia Azzurra ", "mdd" => "Nijinskaia de la Benjamine ", "dmm" => "Famous von der Schlehhecke ", "dmd" => "Nashira v't Buitengebeuren", "ddm" => "Yac v'd Schlehhecke ", "ddd" => "Lena vom Romersee ", "mmmm" => "Darcy vom Leininger Land ", "mmmd" => "Bjulah von der Nibelungenburg ", "mmdm" => "Sire Royal ", "mmdd" => "Turandot Royal ", "mdmm" => "Milton del Eden Blue ", "mdmd" => "Lucia-B della Baia Azzurra", "mddm" => "Nahbay vom Haus Tiefenbach", "mddd" => "Hiroshima de la Benjamine", "dmmm" => "Wenco von der Schlehhecke", "dmmd" => "Raina-Lisa von der Schlehhecke ", "dmdm" => "Efendi v't Buitengebeuren", "dmdd" => "Fran Fine v't Buitengebeuren", "ddmm" => "Lino v'd Schlehhecke", "ddmd" => "Raina-Lisa von der Schlehhecke ", "dddm" => "Efendi v't Buitengebeuren ", "dddd" => "Gina vom Romersee "
        ]);

        foreach(range(1, 3) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }

        // Pedigree x 3
        $dog = Dog::create([
            'name' => 'Bravo',
            'breed' => "Bravo-B Lotosdanes",
            'is_male' => 1,
            'about' => '(Italian Import - Lotosdanes) We wish to thank Milena Franzetti from Italy for this outstanding boy!',
            "m" => "Orkhan De La Benjamine", "d" => "Oceane De Val De L'Amitié", "mm" => "Ch. Milton Del Eden Blue", "md" => "Meloukhia De La Benjamine", "dm" => "Ch. Querkopf Vom Haus Fresena ", "dd" => "Jeremie Du Val De L'Amitié", "mmm" => "Elyston Il Paradiso Di Bella", "mmd" => "Joyce Blue Du Castel De La Roche Aux Fees", "mdm" => "Cheleborn-N", "mdd" => "Ch. Enthea De La Benjamine", "dmm" => "Onegin V.D. Burg Diana", "dmd" => "Findelkind V. Haus Fresena", "ddm" => "Ch. Querkopf Vom Haus Fresena ", "ddd" => "Helodie Du Val De L'Amitié"
        ]);

        // Pedigree x 3
        $dog = Dog::create([
            'name' => 'Breeze',
            'breed' => "Victory's Bacardi Breeze",
            'is_male' => 1,
            "m" => "Lotosdanes Bravo-B", "d" => "Evita vom Blauen See", "mm" => "Orkhan de la Benjamine ", "md" => "Oceane du Val de l'Amitié", "dm" => "Arvid-Arne vom Blauen See", "dd" => "Zamora vom Blauen See", "mmm" => "Ch. Milton de l'Eden Blue", "mmd" => "Meloukhia de la Benjamine", "mdm" => "Ch. Querkopf vom Haus Fresena", "mdd" => "Jeremie du Val de l'Amitié", "dmm" => "Zentro v. Vogtlandeck", "dmd" => "Aneas Adyss", "ddm" => "Gordon Canis Canum", "ddd" => "Mira v. Borntal"
        ]);

        foreach(range(1, 2) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }

        // Pedigree x 3
        $dog = Dog::create([
            'name' => 'Caruso',
            'breed' => "",
            'is_male' => 1,
            "m" => "Legend von haus Tiefenbach", "d" => "Eycke vom Siebengebirge ", "mm" => "Nahbay vom Haus Tiefenbach", "md" => "Ashanti von haus Tiefenbach", "dm" => "Festus von Himmelkron ", "dd" => "Celine vom Siebengebirge ", "mmm" => "Zyrus Von der Schlehhecke ", "mmd" => "Gheza de la Chatellerie ", "mdm" => "Barry vom Dreilandereck ", "mdd" => "Quitsou von haus Tiefenbach ", "dmm" => "Eddy von Hünengrab ", "dmd" => "Yeanny von der Bocksleite", "ddm" => "Wenco von der Schlehhecke ", "ddd" => "Alice vom Siebengebirge ", "mmmm" => "Willowrun's Bocor von der Schlehhecke ", "mmmd" => "Wendy v't Buitengebeuren ", "mmdm" => "Gromyko vom Blauen See ", "mmdd" => "Djenna de la Chatellerie ", "mdmm" => "Erchino v Lion's Cottage ", "mdmd" => "Wendy v't Buitengebeuren", "mddm" => "Hemingway von Haus Tiefenbach", "mddd" => "Fame de la Chatellerie", "dmmm" => "Valentin von der Aschenburg", "dmmd" => "Babsy von Hünengrab ", "dmdm" => "Florian vom Mendener Berg", "dmdd" => "Olivia von der Bocksleite", "ddmm" => "Eraser vom Huas Fresna", "ddmd" => "Lou von der Schlehhecke ", "dddm" => "Brian von der Fröhlichen Pfalz ", "dddd" => "Utta of the Frontier View "
        ]);

        foreach(range(1, 2) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }

        // Pedigree x 4
        $dog = Dog::create([
            'name' => 'Effendi',
            'breed' => "Effendi de la Benjamine",
            'is_male' => 1,
            'about' => 'Co-owned with Wendy Ivan of Dynasty Danes. Special Thanks to Veronique Maunder of Le Benjamine for such a special boy',
             "m" => "Cassius Expletus Hungaricus", "d" => "Chitra de la Benjamine ", "mm" => "Shamaco de la Benjamine", "md" => "Sina de la Benjamine", "dm" => "Veni Vidi Vici des Habits Rouges ", "dd" => "Saratoustra de la Benjamine ", "mmm" => "Ferdjanni von der Nibelungenburg ", "mmd" => "Nina de la Benjamine ", "mdm" => "Osir Della Baia Azzurra ", "mdd" => "Nijinskaia de la Benjamine ", "dmm" => "Schwarzenegger des Habits Rouges ", "dmd" => "Du Monde Pomme D'Amour des Habits Rouges", "ddm" => "Plasir D'Amour des Habits Rouges ", "ddd" => "Nijinskaia de la Benjamine ", "mmmm" => "Darcy vom Leininger Land ", "mmmd" => "Bjulah von der Nibelungenburg ", "mmdm" => "Nahbay vom Haus Tiefenbach ", "mmdd" => "Leiria de la Benjamine ", "mdmm" => "Milton del Eden Blue ", "mdmd" => "Lucia-B della Baia Azzurra", "mddm" => "Nahbay vom Haus Tiefenbach", "mddd" => "Hiroshima de la Benjamine", "dmmm" => "Morgan de la Grande Vigie", "dmmd" => "Moon Light des Habits Rouges ", "dmdm" => "Milton del Eden Blue", "dmdd" => "Melodie du Val de L'Amitie", "ddmm" => "Milton del Eden Blue", "ddmd" => "Melodie du Val de L'Amitie ", "dddm" => "Nahbay vom Haus Tiefenbach ", "dddd" => "Hiroshima de la Benjamine "
        ]);

        foreach(range(1, 5) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }

        // Pedigree x 4
        $dog = Dog::create([
            'name' => 'Legend',
            'breed' => "Legend von haus Tiefenbach",
            'is_male' => 1,
            "m" => "Nahbay von haus Tiefenbach ", "d" => "Ashanti von haus Tiefenbach ", "mm" => "Zyrus von der Schlehhecke ", "md" => "Gheza de la Chatellerie ", "dm" => "Barny Vom Dreilandereck ", "dd" => "Quitsou von haus Tiefenbach ", "mmm" => "Willowrun`s Bocor von der Schlehhecke", "mmd" => "Wendy v.t`Buitengebeuren ", "mdm" => "Gromyko vom Blauen See", "mdd" => "Djenna de la Chatellerie ", "dmm" => "Erchino Von Lion's Cottage", "dmd" => "Alina Vom DreilAndereck", "ddm" => "Hemingway von haus Tiefenbach ", "ddd" => "Fame De la Chatellerie"
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
            'name' => 'Mica',
            'breed' => "My Michelangelo-B Del Piccolo Jigo",
            'is_male' => 1,
            'about' => 'Imported from Piccolo Jigo Kennels in Italy a special Thanks to Roberto & Gabriella Lo Martire for such a wonderful addition to my family Mica\'s stud fee is $2,500 to select and approved females per breeding under written agreement.',
            "m" => "Achraf de la Benjamine", "d" => "Vyasadeva de la Benjamine ", "mm" => "Uxalanda de la Benjamine", "md" => "Umandaya de la Benjamine", "dm" => "Tollendal de la Benjamine ", "dd" => "Tijuana de la Benjamine ", "mmm" => "Shamaco de la Benjamine ", "mmd" => "Saratoustra de la Benjamine ", "mdm" => "Shamaco de la Benjamine ", "mdd" => "Sheherazade de la Benjamine ", "dmm" => "Bartabas-B ", "dmd" => "Opacita de la Benjamine", "ddm" => "Osir Della Baia Azzurra ", "ddd" => "Najinskaia de la Benjamine ", "mmmm" => "Ferdjanni von der Nibelungenburg ", "mmmd" => "Nina de la Benjamine ", "mmdm" => "Plasir D'Amour des Habits Rouges ", "mmdd" => "Nijinskaia de la Benjamine ", "mdmm" => "Ferdjanni von der Nibelungenburg ", "mdmd" => "Nina de la Benjamine", "mddm" => "Osir Della Baia Azzurra", "mddd" => "Najinskaia de la Benjamine", "dmmm" => "Orkhan de la Benjamine", "dmmd" => "Oceane du val de L'Amitie ", "dmdm" => "Milton del Eden Blue", "dmdd" => "Meloukhia de la Benjamine", "ddmm" => "Milton del Eden Blue", "ddmd" => "Lucia-B della Baia Azzurra ", "dddm" => "Nahbay vom Haus Tiefenbach ", "dddd" => "Hiroshima de la Benjamine "
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
            'name' => 'Neo',
            'breed' => "Victory's The Matrix",
            'is_male' => 1,
            "m" => "Victory's American Justice", "d" => "Victory's Yancey True Blue ", "mm" => "Victory's Bacardi Breeze", "md" => "Victory's Play On Piper", "dm" => "Quasi v't Buitengebeuren ", "dd" => "Sailor-Moon de la Benjamine ", "mmm" => "Lotosdanes Bravo ", "mmd" => "Evita vom Blauen See ", "mdm" => "Lotosdanes Bravo ", "mdd" => "Victory's Vivacious Valkyrie ", "dmm" => "Yac v'd Schlehhecke ", "dmd" => "Lena vom Romersee", "ddm" => "Osir Della Baia Azzurra ", "ddd" => "Nijinskaia de la Benjamine ", "mmmm" => "Orkhan de la Benjamine ", "mmmd" => "Oceane du val de L'Amitie ", "mmdm" => "Arvid-Arne vom Blauen See ", "mmdd" => "Zamora vom Blauen See ", "mdmm" => "Orkhan de la Benjamine ", "mdmd" => "Oceane du val de L'Amitie", "mddm" => "Kohinoor Just For Victory", "mddd" => "Victorys Rhythm Is A Dancer", "dmmm" => "Lino v'd Schlehhecke", "dmmd" => "Raina-Lisa von der Schlehhecke ", "dmdm" => "Efendi v't Buitengebeuren", "dmdd" => "Gina vom Romersee", "ddmm" => "Milton del Eden Blue", "ddmd" => "Lucia-B della Baia Azzurra ", "dddm" => "Nahbay vom Haus Tiefenbach ", "dddd" => "Hiroshima de la Benjamine "
        ]);

        foreach(range(1, 2) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }

        // Pedigree x 3
        $dog = Dog::create([
            'name' => 'Quasi',
            'breed' => "Quasi v't Buitengebeuren",
            'is_male' => 1,
            'about' => 'Co-Owned by Victory Great Danes and Willowrun Great Danes',
            "m" => " Yac vd Schlehhecke", "d" => " Lena v Romersee", "mm" => " Lino vd Schlehhecke", "md" => " Raina-Lisa vd Schlehhecke", "dm" => " CH Efendi vt' Buitengebeuren", "dd" => " Gina v Romersee", "mmm" => "Hemmingway v Haus Tiefenbach", "mmd" => "Grit vd Schlehhecke", "mdm" => "Nahbay v Haus Tiefenbach", "mdd" => "Elderberry's April", "dmm" => "Nahbay v Haus Tiefenbach", "dmd" => "Velvet Queen vt' Buitengebeuren", "ddm" => "Erchino v Lion's Cottage", "ddd" => "Ninja vt' Buitengebeuren"
        ]);

        foreach(range(1, 2) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }

        // Pedigree x 4
        $dog = Dog::create([
            'name' => 'Riddick',
            'breed' => "Victory's Dark Furyan",
            'is_male' => 1,
            "m" => "Armani de la Benjamine", "d" => "JolieJolie Dei Monti Del Keraton ", "mm" => "Eros Dei Monti Del Keraton", "md" => "Sheherazade de la Benjamine", "dm" => "Uxalanda de la Benjamine ", "dd" => "Elisa dei Monti del Keraton ", "mmm" => "Duncan dei Monti del Keraton ", "mmd" => "Olympia de la Benjamine ", "mdm" => "Osir Della Baia Azzurra ", "mdd" => "Najinskaia de la Benjamine ", "dmm" => "Shamaco de la Benjamine ", "dmd" => "Saratoustra de la Benjamine", "ddm" => "Duncan dei Monti del Keraton ", "ddd" => "Olimpia de la Benjamine ", "mmmm" => "Lifar de la Benjamine ", "mmmd" => "Cabyriablueice ", "mmdm" => "Milton del Eden Blue ", "mmdd" => "Meloukhia de la Benjamine ", "mdmm" => "Milton del Eden Blue ", "mdmd" => "Lucia-B della Baia Azzurra", "mddm" => "Nahbay vom Haus Tiefenbach", "mddd" => "Hiroshima de la Benjamine", "dmmm" => "Ferdjanni von der Nibelungenburg", "dmmd" => "Nina de la Benjamine ", "dmdm" => "Plasir D'Amour des Habits Rouges", "dmdd" => "Nijinskaia de la Benjamine", "ddmm" => "Lifar de la Benjamine", "ddmd" => "Cabyriablueice ", "dddm" => "Milton del Eden Blue ", "dddd" => "Meloukhia de la Benjamine "
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
            'name' => 'Walker',
            'breed' => "Victory's Shadow of the Windwalker",
            'is_male' => 1,
            // First Generation
            'm' => "Victory's Dark Furyan", 'd' => "Victory's Blue View of Willowrun",

            // Second Generation
            'mm' => "Armani de la Benjamine", 'md' => "JolieJolie-B Del Monti Del Keraton",
            'dm' => "Victory's Magic in the Moonlight", 'dd' => "Willowrun's Blue Bias",

            // Third Generation Maternal
            'mmm' => "Eros-B Del Monti Del Keraton", 'mmd' => "Sheherazade de la Benjamine",
            'mdm' => "Uxalanda de la Benjamine", 'mdd' => "Elisa-B Del Monti Del Keraton",

            // Third Generation Paternal
            'dmm' => "Neo Nexus V.'T. Buitengebeuren", 'dmd' => "Victory's Fantam Fury", 
            'ddm' => "Legen Von Haus Tiefenbach", 'ddd' => "Neala Willowrun Vom Romersee",
        ]);

        foreach(range(1, 5) as $index)
        {
            $picture = new Picture;
            $picture->path = $dog->id . '-' . $index . '.jpg';
            $picture->save();

            $dog->pictures()->save($picture);
        }

        // Pedigree x 4
        $dog = Dog::create([
            'name' => 'Zaire',
            'breed' => "Victory's Northern Star",
            'is_male' => 1,
            'about' => 'Owned and Loved by Yasmeen Gjelsvik, Co-owned by Victoria Pearson',
            "m" => "Bravo-B Lotosdanes", "d" => "Sailor-Moon de la Benjamine", "mm" => "Orkhan De La Benjamine", "md" => "Oceane De Val De L'Amitié", "dm" => "Multi Ch. Osir della Baia Azzurra", "dd" => "Nijinskaia de la Benjamine", "mmm" => "Ch. Milton Del Eden Blue", "mmd" => "Meloukhia De La Benjamine", "mdm" => "Ch. Querkopf Vom Haus Fresena ", "mdd" => "Jeremie Du Val De L'Amitié", "dmm" => "Ch. Milton Del Eden Blue", "dmd" => "Multi Ch. Lucia della Baia Azzurra", "ddm" => "Nahbay Von Hause Tiefenbach", "ddd" => "Hiroshima de la Benjamine", "mmmm" => "Elyston Il Paradiso Di Bella", "mmmd" => "Joyce Blue Du Castel De La Roche Aux Fees", "mmdm" => "Cheleborn-N", "mmdd" => "Ch. Enthea De La Benjamine", "mdmm" => "Onegin V.D. Burg Diana", "mdmd" => "Findelkind V. Haus Fresena", "mddm" => "Ch. Querkopf Vom Haus Fresena ", "mddd" => "Helodie Du Val De L'Amitié", "dmmm" => "Elyston Il Paradiso Di Bella", "dmmd" => "Joyce Blue Du Castel De La Roche Aux Fees", "dmdm" => "Ill della Baia Azzurra", "dmdd" => "Dasy della Baia Azzurra", "ddmm" => "Zyrus V.D. Schlehhcke", "ddmd" => "Gheza de la Chatellerie", "dddm" => "Ilko Del Nord Ovest", "dddd" => "Enthea de la Benjamine"
        ]);
	}

}
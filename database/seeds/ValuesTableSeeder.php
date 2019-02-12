<?php

use Illuminate\Database\Seeder;

class ValuesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('values')->insert([
      [
        'title' => 'Food Provisioning',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Ecosystems provide the conditions for growing food. Food comes principally from managed agro-ecosystems but marine and freshwater systems or forests also provide food for human consumption. Wild foods from forests are often underestimated.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Non-Food Provisioning',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Ecosystems provide a great diversity of materials for construction and fuel including wood, biofuels and plant oils that are directly derived from wild and cultivated plant species.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Freshwater Provisioning',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Ecosystems play a vital role in the global hydrological cycle, as they regulate the flow and purification of water. Vegetation and forests influence the quantity of water available locally.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Medicinal Resources Provisioning',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Ecosystems and biodiversity provide many plants used as traditional medicines as well as providing the raw materials for the pharmaceutical industry. All ecosystems are a potential source of medicinal resources.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Local climate and air quality Regulation',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Trees provide shade whilst forests influence rainfall and water availability both locally and regionally. Trees or other plants also play an important role in regulating air quality by removing pollutants from the atmosphere.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Carbon sequestration and storage Regulation',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Ecosystems regulate the global climate by storing and sequestering greenhouse gases. As trees and plants grow, they remove carbon dioxide from the atmosphere and effectively lock it away in their tissues. In this way forest ecosystems are carbon stores. Biodiversity also plays an important role by improving the capacity of ecosystems to adapt to the effects of climate change.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Moderation of extreme events Regulation',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Extreme weather events or natural hazards include floods, storms, tsunamis, avalanches and landslides. Ecosystems and living organisms create buffers against natural disasters, thereby preventing possible damage. For example, wetlands can soak up flood water whilst trees can stabilize\r\nslopes. Coral reefs and mangroves help protect coastlines from storm damage.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Waste-water treatment Regulation',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Ecosystems such as wetlands filter both human and animal waste and act as a natural buffer to the surrounding environment. Through the biological activity of microorganisms in the soil, most waste is broken down. Thereby pathogens (disease causing microbes) are eliminated, and the level of nutrients and pollution is reduced.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Erosion prevention and maintenance of soil fertility Regulation',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Soil erosion is a key factor in the process of land degradation and desertification. Vegetation cover provides a vital regulating service by preventing soil erosion. Soil fertility is essential for plant growth and agriculture and well functioning ecosystems supply the soil with nutrients required to support plant growth.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Pollination Regulation',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Insects and wind pollinate plants and trees which is essential for the development of fruits, vegetables and seeds. Animal pollination is an ecosystem service mainly provided by insects but also by some birds and bats.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Biological control Regulation',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Ecosystems are important for regulating pests and vector borne diseases that attack plants, animals and people. Ecosystems regulate pests and diseases through the activities of predators and parasites. Birds, bats, flies, wasps, frogs and fungi all act as natural controls.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Supporting Service: Habitats for Species',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Habitats provide everything that an individual plant or animal needs to survive: food; water; and shelter. Each ecosystem provides different habitats that can be essential for a species’ lifecycle. Migratory species including birds, fish, mammals and insects all depend upon different ecosystems during their movements.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Supporting Service: Maintenance of genetic diversity',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Genetic diversity is the variety of genes between and within species populations. Genetic diversity distinguishes different breeds or races from each other thus providing the basis for locally well-adapted cultivars and a gene pool for further developing commercial crops and livestock. Some habitats have an exceptionally high number of species which makes them more genetically diverse than others and are known as ‘biodiversity hotspots’.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Cultural Service: Recreation and mental and physical health',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Walking and playing sports in green space is not only a good form of physical exercise but also lets people relax. The role that green space plays in maintaining mental and physical health is increasingly being recognized, despite difficulties of measurement.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Cultural Service: Tourism',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Ecosystems and biodiversity play an important role for many kinds of tourism which in turn provides considerable economic benefits and is a vital source of income for many countries.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Cultural Service: Aesthetic appreciation and inspiration for culture, art and design',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Language, knowledge and the natural environment have been intimately related throughout human history. Biodiversity, ecosystems and natural landscapes have been the source of inspiration for much of our art, culture and increasingly for science.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Cultural Service: Spiritual experience and sense of place',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'In many parts of the world natural features such as specific forests, caves or mountains are considered sacred or have a religious meaning. Nature is a common element of all major religions and traditional knowledge, and associated customs are important for creating a sense of belonging.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Cultural Service: Natural Heritage',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'They include natural landscapes such as the Wadden Sea. The Wadden Sea is the largest unbroken system of intertidal sand and mud flats in the world.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Cultural Service: Symbolic Value',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'They include all species and/or landscapes with special conservation significance other than those listed in other values. For example, the black-tailed godwit. The Black-tailed Godwit is the national bird of the Netherlands, the country in which the vast majority of the West European limosa race breed. These Dutch birds are an important part of the country’s cultural heritage and are of major international significance.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ],
      [
        'title' => 'Cultural Service: Science and Education',
        'image' => 'https://lorempixel.com/800/400/?51336',
        'description' => 'Mainstreaming biodiversity into education and learning is one of UNESCO’s priorities. Education brings sustainability to development efforts; it is the way to shape new ways of seeing the world, new practices and behaviors and makes biodiversity conservation possible.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]
    ]);
  }
}

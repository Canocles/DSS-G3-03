<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->delete();

        DB::table('productos')->insert([
            'nombre' => 'Nox Hummer MC USB 3.0 Negra',
            'precio' => 45.95,
            'descripcion' => 'Cuenta con puertos USB 2.0 y 3.0, con una tira de LED al rededor del panel frontal, cuenta con un diseño elegante.',
            'urlImagen' => 'images/productos/nox-hummer-mc-usb-3-0.jpg',
            'categoria' => 1
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Nox Hummer MC USB 3.0 Zero Edition Blanca',
            'precio' => 45.95,
            'descripcion' => 'Cuenta con puertos USB 2.0 y 3.0, con una tira de LED al rededor del panel frontal, cuenta con un diseño elegante.',
            'urlImagen' => 'images/productos/nox-hummer-mc-usb-3-0-blanca.jpg',
            'categoria' => 1
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Nox Coolbay SX USB 3.0',
            'precio' => 35.95,
            'descripcion' => 'Tamaño compacto, lo cual permite una mayor refrigeración, cuenta con puertos USB 2.0 y 3.0.',
            'urlImagen' => 'images/productos/nox-coolbay-sx-usb-3-0.jpg',
            'categoria' => 1
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Nox Coolbay MX USB 3.0 Negra',
            'precio' => 30.95,
            'descripcion' => 'Elegante y compacta, lo cual permite una mayor refrigeración, cuenta con puertos USB 2.0 y 3.0.',
            'urlImagen' => 'images/productos/nox-coolbay-mx-usb-3-0-negra.jpg',
            'categoria' => 1
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Nox Pax USB 3.0',
            'precio' => 19.95,
            'descripcion' => 'LEDs brillantes en el frontal, cuenta con puertos USB 2.0 y 3.0, compatible con gráficas de gran tamaño.',
            'urlImagen' => 'images/productos/nox-pax.jpg',
            'categoria' => 1
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Gigabyte GA-H110M-S2H',
            'precio' => 55.45,
            'descripcion' => 'Dual Channel DDR4, 2 DIMMs, Soporte de procesadores Intel Core de 6ª generación.',
            'urlImagen' => 'images/productos/gigabyte-ga-h110m-s2h-1.jpg',
            'categoria' => 2
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Asus H110M-D',
            'precio' => 58.95,
            'descripcion' => 'Compatibilidad con módulos DDR4, 5X Protection II: Protección hardware avanzada',
            'urlImagen' => 'images/productos/asus-h110m-d.jpg',
            'categoria' => 2
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Gigabyte GA-B250M-DS3H',
            'precio' => 75.45,
            'descripcion' => '4xDDR4 DIMM, Soporte de procesadores Intel Core de 6ª y 7ª generación.',
            'urlImagen' => 'images/productos/gigabyte-ga-b250m-ds3h.jpg',
            'categoria' => 2
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Gigabyte GA-Z270-HD3P',
            'precio' => 128.95,
            'descripcion' => '4xDDR4 DIMM, Soporte de procesadores Intel Core de 6ª y 7ª generación.',
            'urlImagen' => 'images/productos/gigabyte-ga-z270-hd3p.jpg',
            'categoria' => 2
        ]);

        DB::table('productos')->insert([
            'nombre' => 'MSI Z270 Gaming M3',
            'precio' => 168.95,
            'descripcion' => '4xDDR4 DIMM, Soporte de procesadores Intel Core de 6ª y 7ª generación.',
            'urlImagen' => 'images/productos/msi-z270-gaming-m3.jpg',
            'categoria' => 2
        ]);

        DB::table('productos')->insert([
            'nombre' => 'G.Skill Ripjaws V Red DDR4 2400 PC4-19200 16GB 2x8GB CL15',
            'precio' => 125.00,
            'descripcion' => 'Memoria DDR4, Unbuffered, módulo de tipo DIMM, 16GB (8GBx2), velocidad 2400MHz.',
            'urlImagen' => 'images/productos/g-skill-ripjaws-5-red-ddr4-2133-pc4-17000-8gb-2x4gb-cl15.jpg',
            'categoria' => 3
        ]);

        DB::table('productos')->insert([
            'nombre' => 'G.Skill Aegis DDR4 2133 PC4-17000 8GB CL15',
            'precio' => 59.00,
            'descripcion' => 'Memoria DDR4, 8GB (8GBx1), velocidad 2133MHz',
            'urlImagen' => 'images/productos/g-skill-aegis-ddr4-2133-pc4-17000-4gb-1x4gb-cl15.jpg',
            'categoria' => 3
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Kingston HyperX Fury DDR4 2133 PC4-17000 8GB CL14',
            'precio' => 65.95,
            'descripcion' => 'Memoria DDR4, 8GB (8GBx1), velocidad 2133MHz.',
            'urlImagen' => 'images/productos/kingston-hyperx-fury-ddr4-2133-pc4-17000-4gb-cl14.jpg',
            'categoria' => 3
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Corsair Vengeance LPX DDR4 3000 PC-24000 16GB 2x8GB CL15',
            'precio' => 136.00,
            'descripcion' => 'Memoria DDR4, módulo de tipo DIMM, 16GB (8GBx2), velocidad 2133MHz.',
            'urlImagen' => 'images/productos/corsair-vengeance-lpx-ddr4-3000mhz-pc-24000-8gb-2x4-black.jpg',
            'categoria' => 3
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Kingston ValueRAM SO-DIMM DDR3 1333 PC-106000 4GB CL9',
            'precio' => 28.00,
            'descripcion' => 'Memoria DDR4, módulo de tipo DIMM, 16GB (8GBx2), velocidad 2133MHz.',
            'urlImagen' => 'images/productos/kingston-valueram-4gb-ddr3-1333mhz-pc3-10600-cl9-sodimm.jpg',
            'categoria' => 3
        ]); 

        DB::table('productos')->insert([
            'nombre' => 'Gigabyte GeForce GTX 1060 Windforce OC 6GB GDDR5',
            'precio' => 265.00,
            'descripcion' => 'Arquitectura Pascal, Cuda, compatible con DirectX12, 6GB GDDR5 dedicados.',
            'urlImagen' => 'images/productos/gigabyte-geforce-gtx-1060-windoforce-oc-6gb-gddr5.jpg',
            'categoria' => 4
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Asus Dual GTX 1060 OC 6GB GDDR5',
            'precio' => 325.00,
            'descripcion' => 'Arquitectura Pascal, Cuda, compatible con DirectX12, 6GB GDDR5 dedicados.',
            'urlImagen' => 'images/productos/asus-dual-gtx-1060-oc-6gb-gddr5.jpg',
            'categoria' => 4
        ]);

        DB::table('productos')->insert([
            'nombre' => 'MSI GTX 1060 GAMING X 6GB GDDR5',
            'precio' => 320.00,
            'descripcion' => 'Arquitectura Pascal, Cuda, compatible con DirectX12, 6GB GDDR5 dedicados.',
            'urlImagen' => 'images/productos/msi-gtx-1060-gaming-x-6gb-gddr5.jpg',
            'categoria' => 4
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Asus ROG Strix Geforce GTX 1070 Gaming 8GB GDDR5',
            'precio' => 535.00,
            'descripcion' => 'Arquitectura Pascal, Cuda, compatible con DirectX12, 8GB GDDR5 dedicados.',
            'urlImagen' => 'images/productos/asus-rog-strix-gtx-1070-gaming-8gb-gddr5.jpg',
            'categoria' => 4
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Gigabyte Aorus Geforce GTX 1080 Ti 11GB',
            'precio' => 849.00,
            'descripcion' => 'Arquitectura Pascal, Cuda, compatible con DirectX12, 11GB GDDR5X dedicados.',
            'urlImagen' => 'images/productos/gigabyte-aorus-geforcea-gtx-1080-ti-11gb-gddr5x-tarjeta-grafica-001.jpg',
            'categoria' => 4
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Creative Sound Blaster Audigy FX PCI Express',
            'precio' => 25.00,
            'descripcion' => 'Máxima calidad de reproducción y grabación.',
            'urlImagen' => 'images/productos/creative-sound-blaster-audigy-fx-pci-express.jpg',
            'categoria' => 5
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Asus Xonar DGX 5.1 PCIe',
            'precio' => 30.00,
            'descripcion' => 'Construido para encender todos los detalles de sonido en los juegos.',
            'urlImagen' => 'images/productos/asus-xonar-dgx-5-1-pcie.jpg',
            'categoria' => 5
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Creative Sound Blaster Audigy RX',
            'precio' => 55.00,
            'descripcion' => 'Ideal para grbación y postproducción de audios de todo tipo.',
            'urlImagen' => 'images/productos/creative-sound-blaster-audigy-rx.jpg',
            'categoria' => 5
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Asus Xonar DG 5.1 PCI',
            'precio' => 22.00,
            'descripcion' => 'Incluye amplificador de auriculares, ofrece un sonido muy detallado para juegos.',
            'urlImagen' => 'images/productos/asus-xonar-dg-5-1.jpg',
            'categoria' => 5
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Approx Tarjeta de Sonido 5.1 PCIe',
            'precio' => 19.95,
            'descripcion' => 'Ofrece un sonido muy detallado para música y juegos.',
            'urlImagen' => 'images/productos/approx-tarjeta-de-sonido-pcie-5-1.jpg',
            'categoria' => 5
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Intel Core I7-7700K 4.2GHz BOX',
            'precio' => 345.00,
            'descripcion' => 'Procesador Intel i7',
            'urlImagen' => 'images/productos/intel-i7-6700k-4-0ghz-box.jpg',
            'categoria' => 6
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Intel Core i5-7600K 3.8GHz BOX',
            'precio' => 246.95,
            'descripcion' => 'Procesador Intel i5',
            'urlImagen' => 'images/productos/intel-i5-6600k-3-5ghz.jpg',
            'categoria' => 6
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Intel Core i3-6100 3.7GHz Box',
            'precio' => 108.95,
            'descripcion' => 'Procesador Intel i3',
            'urlImagen' => 'images/productos/intel-core-i3-6100-3-7ghz-box.jpg',
            'categoria' => 6
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Intel Core i5-7500 3.4GHz BOX',
            'precio' => 196.95,
            'descripcion' => 'Procesador Intel i5',
            'urlImagen' => 'images/productos/intel-i5-6600k-3-4ghz.jpg',
            'categoria' => 6
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Intel Core I7-7700 3.6GHz BOX',
            'precio' => 305.95,
            'descripcion' => 'Procesador Intel i7',
            'urlImagen' => 'images/productos/intel-i7-6700k-3-6ghz-box.jpg',
            'categoria' => 6
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Seagate BarraCuda 3.5" 1TB SATA3',
            'precio' => 43.95,
            'descripcion' => 'Capacidad 1TB, interfaz SATA3 6GB/s.',
            'urlImagen' => 'images/productos/Seagate-BarraCuda-3.5-1TB-SATA3.jpg',
            'categoria' => 7
        ]);

        DB::table('productos')->insert([
            'nombre' => 'WD Blue 1TB SATA3',
            'precio' => 45.95,
            'descripcion' => 'Capacidad 1TB, interfaz ATA III 6GB/s.',
            'urlImagen' => 'images/productos/wd-caviar-blue-1tb-sata3-maestro.jpg',
            'categoria' => 7
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Seagate Desktop 7200.14 2TB SATA3 64MB',
            'precio' => 65.45,
            'descripcion' => 'Capacidad 2TB, interfaz SATA 6GB/s.',
            'urlImagen' => 'images/productos/seagate-desktop-7200-14-2tb-sata3-64mb-1.jpg',
            'categoria' => 7
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Toshiba DT01ACA100 1TB 7200rpm',
            'precio' => 44.45,
            'descripcion' => 'Capacidad 1TB, interfaz SATA3 6GB/s.',
            'urlImagen' => 'images/productos/toshiba-dt01aca100-1tb-7200rpm.jpg',
            'categoria' => 7
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Toshiba DT01ACA200 2TB SATA3 64MB',
            'precio' => 62.95,
            'descripcion' => 'Capacidad 2TB, interfaz SATA 6GB/s.',
            'urlImagen' => 'images/productos/toshiba-dt01aca200-2tb-sata3-64mb.jpg',
            'categoria' => 7
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Cooler Master Hyper 212X',
            'precio' => 25.95,
            'descripcion' => 'Ventilador.',
            'urlImagen' => 'images/productos/cooler-master-hyper-212x.jpg',
            'categoria' => 8
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Cooler Master Hyper TX3i CPU Cooler',
            'precio' => 19.95,
            'descripcion' => 'Ventilador.',
            'urlImagen' => 'images/productos/cooler-master-hyper-tx3i-cpu-cooler.jpg',
            'categoria' => 8
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Cooler Master Hyper 103',
            'precio' => 18.95,
            'descripcion' => 'Ventilador.',
            'urlImagen' => 'images/productos/cooler-master-hyper-103.jpg',
            'categoria' => 8
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Enermax Liqmax II 120S',
            'precio' => 55.95,
            'descripcion' => 'Ventilador.',
            'urlImagen' => 'images/productos/enermax-liqmax-ii-120.jpg',
            'categoria' => 8
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Nox Hummer H-212 CPU Cooler',
            'precio' => 21.95,
            'descripcion' => 'Ventilador.',
            'urlImagen' => 'images/productos/nox-hummer-h-212-cpu-cooler.jpg',
            'categoria' => 8
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Tacens Mars Gaming MPII 650W',
            'precio' => 30.00,
            'descripcion' => 'Fuente de alimentación.',
            'urlImagen' => 'images/productos/tacens-mars-gaming-700w.jpg',
            'categoria' => 9
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Corsair VS 650W 80 Plus',
            'precio' => 55.95,
            'descripcion' => 'Fuente de alimentación.',
            'urlImagen' => 'images/productos/corsair-vs650-650w-vs-series-80-plus.jpg',
            'categoria' => 9
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Tacens Mars Gaming 800W 80 Plus',
            'precio' => 50.95,
            'descripcion' => 'Fuente de alimentación.',
            'urlImagen' => 'images/productos/tacens-mars-gaming-800w.jpg',
            'categoria' => 9
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Corsair RM750X 750W 80 Plus Gold Modular',
            'precio' => 120.95,
            'descripcion' => 'Fuente de alimentación.',
            'urlImagen' => 'images/productos/corsair-rm750x-750w-80-plus-gold-modular.jpg',
            'categoria' => 9
        ]);

        DB::table('productos')->insert([
            'nombre' => 'L-Link Fuente de Alimentación 650W PFC',
            'precio' => 20.95,
            'descripcion' => 'Fuente de alimentación.',
            'urlImagen' => 'images/productos/l-link-fuente-de-alimentacion-650w-pfc.jpg',
            'categoria' => 9
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Cable Alimentación Molex/SATA 15 cm',
            'precio' => 1.75,
            'descripcion' => 'Compatible Serial ATA Ver. 1.0 Standard',
            'urlImagen' => 'images/productos/cable-alimentacion-molex-4-pines-macho-a-sata-15-pines.jpg',
            'categoria' => 10
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Owlotech Cable Adaptador Molex 4 Pines Macho A 2x SATA 15 Pines',
            'precio' => 1.75,
            'descripcion' => 'Permite alimentar dos dispositivos Serial ATA desde una conexión de fuente de alimentación de 4 Pines ',
            'urlImagen' => 'images/productos/owlotech-cable-adaptador-molex-4-pines-macho-a-2x-sata-15-pines.jpg',
            'categoria' => 10
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Cable de Alimentacion PCI Express 8 pines 2 x 5.25',
            'precio' => 1.75,
            'descripcion' => 'Adaptador de alimentación interno.',
            'urlImagen' => 'images/productos/cable-de-alimentacion-pci-express-8-pines-2-x-5-25.jpg',
            'categoria' => 10
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Phanteks CB8V Cable Extensión Tarjeta Gráfica 6+2 Pines Negro/Rojo',
            'precio' => 4.95,
            'descripcion' => 'Conexión 8 Pines, longitud 500 mm',
            'urlImagen' => 'images/productos/phanteks-cb8v-cable-extension-tarjeta-grafica-8-pines-negro-rojo.jpg',
            'categoria' => 10
        ]);

        DB::table('productos')->insert([
            'nombre' => 'CrossFire Bridge - Cable Crossfire ATI 9.5cm',
            'precio' => 7.75,
            'descripcion' => 'Cable puente para conectar 2 tarjetas ATI mediante conexión Crossfire, que incrementa considerablemente el rendimiento gráfico.',
            'urlImagen' => 'images/productos/crossfire-bridge-cable-crossfire-ati-9cm.jpg',
            'categoria' => 10
        ]);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateMunicipioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_departamento')->unsigned();    
            $table->string('nombre');
            $table->boolean('condicion')->default(1);
            $table->timestamps();

            $table->foreign('id_departamento')->references('id')->on('departamento');
        });

         //guatemala 17
         DB::table('municipio')->insert(['nombre'=>'Santa Catarina Pinula', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'San José Pinula', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'Guatemala', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'San José del Golfo', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'Palencia', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'Chinautla', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'San Pedro Ayampuc', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'Mixco', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'San Pedro Sacatapéquez', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'San Juan Sacatepéquez', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'Chuarrancho', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'San Raymundo', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'Fraijanes', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'Amatitlán', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'Villa Nueva', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'Villa Canales', 'id_departamento'=>7]);//
         DB::table('municipio')->insert(['nombre'=>'San Miguel Petapa', 'id_departamento'=>7]);//

        ///Alta Verapaz 17
        DB::table('municipio')->insert(['nombre'=>'Cobán', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'Santa Cruz Verapaz', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'San Cristóbal Verapaz', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'Tactic', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'Tamahú', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'San Miguel Tucurú', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'Panzós', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'Senahú', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'San Pedro Carchá', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'San Juan Chamelco', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'Lanquín', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'Santa María Cahabón', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'Chisec', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'Chahal', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'Fray Bartolomé de las Casas', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'Raxruhá', 'id_departamento'=>1]);
        DB::table('municipio')->insert(['nombre'=>'Santa Catalina La Tinta', 'id_departamento'=>1]);


        //baja verapaz 8
        DB::table('municipio')->insert(['nombre'=>'Salamá', 'id_departamento'=>2]);
        DB::table('municipio')->insert(['nombre'=>'San Miguel Chicaj', 'id_departamento'=>2]);
        DB::table('municipio')->insert(['nombre'=>'Rabinal', 'id_departamento'=>2]);
        DB::table('municipio')->insert(['nombre'=>'Cubulco', 'id_departamento'=>2]);
        DB::table('municipio')->insert(['nombre'=>'Granados', 'id_departamento'=>2]);
        DB::table('municipio')->insert(['nombre'=>'Santa Cruz el Chol', 'id_departamento'=>2]);
        DB::table('municipio')->insert(['nombre'=>'San Jerónimo', 'id_departamento'=>2]);
        DB::table('municipio')->insert(['nombre'=>'Purulhá', 'id_departamento'=>2]);

        //chimaltenango 16
        DB::table('municipio')->insert(['nombre'=>'Chimaltenango', 'id_departamento'=>3]);//
        DB::table('municipio')->insert(['nombre'=>'San José Poaquil', 'id_departamento'=>3]);//
        DB::table('municipio')->insert(['nombre'=>'San Martín Jilotepeque', 'id_departamento'=>3]);//
        DB::table('municipio')->insert(['nombre'=>'San Juan Comalapa', 'id_departamento'=>3]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Apolonia', 'id_departamento'=>3]);//
        DB::table('municipio')->insert(['nombre'=>'Tecpán', 'id_departamento'=>3]);//
        DB::table('municipio')->insert(['nombre'=>'Patzún', 'id_departamento'=>3]);//
        DB::table('municipio')->insert(['nombre'=>'San Miguel Pochuta', 'id_departamento'=>3]);//
        DB::table('municipio')->insert(['nombre'=>'Patzicía', 'id_departamento'=>3]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Cruz Balanyá', 'id_departamento'=>3]);//
        DB::table('municipio')->insert(['nombre'=>'Acatenango', 'id_departamento'=>3]);//
        DB::table('municipio')->insert(['nombre'=>'San Pedro Yepocapa', 'id_departamento'=>3]);
        DB::table('municipio')->insert(['nombre'=>'San Andrés Itzapa', 'id_departamento'=>3]);//
        DB::table('municipio')->insert(['nombre'=>'Parramos', 'id_departamento'=>3]);//
        DB::table('municipio')->insert(['nombre'=>'Zaragoza', 'id_departamento'=>3]);//
        DB::table('municipio')->insert(['nombre'=>'El Tejar', 'id_departamento'=>3]);//

        //chiquimula 11
        DB::table('municipio')->insert(['nombre'=>'Chiquimula', 'id_departamento'=>4]);//
        DB::table('municipio')->insert(['nombre'=>'Jocotán', 'id_departamento'=>4]);//
        DB::table('municipio')->insert(['nombre'=>'Esquipulas', 'id_departamento'=>4]);//
        DB::table('municipio')->insert(['nombre'=>'Camotán', 'id_departamento'=>4]);//
        DB::table('municipio')->insert(['nombre'=>'Quezaltepeque', 'id_departamento'=>4]);//
        DB::table('municipio')->insert(['nombre'=>'Olopa', 'id_departamento'=>4]);//
        DB::table('municipio')->insert(['nombre'=>'Ipala', 'id_departamento'=>4]);//
        DB::table('municipio')->insert(['nombre'=>'San Juan Ermita', 'id_departamento'=>4]);//
        DB::table('municipio')->insert(['nombre'=>'Concepción Las Minas', 'id_departamento'=>4]);//
        DB::table('municipio')->insert(['nombre'=>'San Jacinto', 'id_departamento'=>4]);//
        DB::table('municipio')->insert(['nombre'=>'San José la Arada', 'id_departamento'=>4]);//
        
        //el progreso 8
        DB::table('municipio')->insert(['nombre'=>'El Jícaro', 'id_departamento'=>5]);//
        DB::table('municipio')->insert(['nombre'=>'Morazán', 'id_departamento'=>5]);//
        DB::table('municipio')->insert(['nombre'=>'San Agustín Acasaguastlán', 'id_departamento'=>5]);//
        DB::table('municipio')->insert(['nombre'=>'San Antonio La Paz', 'id_departamento'=>5]);
        DB::table('municipio')->insert(['nombre'=>'San Cristóbal Acasaguastlán', 'id_departamento'=>5]);//
        DB::table('municipio')->insert(['nombre'=>'Sanarate', 'id_departamento'=>5]);//
        DB::table('municipio')->insert(['nombre'=>'Guastatoya', 'id_departamento'=>5]);//
        DB::table('municipio')->insert(['nombre'=>'Sansare', 'id_departamento'=>5]);//

         //quiche 21
         DB::table('municipio')->insert(['nombre'=>'Santa Cruz del Quiché', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Chiché', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Chinique', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Zacualpa', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Chajul', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Chichicastenango', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Patzité', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'San Antonio Ilotenango', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'San Pedro Jocopilas', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Cunén', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'San Juan Cotzal', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Joyabaj', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Santa María Nebaj', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'San Andrés Sajcabajá', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Uspantán', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Sacapulas', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'San Bartolomé Jocotenango', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Canillá', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Chicamán', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Ixcán', 'id_departamento'=>14]);//
         DB::table('municipio')->insert(['nombre'=>'Pachalum', 'id_departamento'=>14]);//
          
         //escuintla 14
         DB::table('municipio')->insert(['nombre'=>'Escuintla', 'id_departamento'=>6]);//
         DB::table('municipio')->insert(['nombre'=>'Santa Lucía Cotzumalguapa', 'id_departamento'=>6]);//
         DB::table('municipio')->insert(['nombre'=>'La Democracia', 'id_departamento'=>6]);//
         DB::table('municipio')->insert(['nombre'=>'Siquinalá', 'id_departamento'=>6]);//
         DB::table('municipio')->insert(['nombre'=>'Masagua', 'id_departamento'=>6]);//
         DB::table('municipio')->insert(['nombre'=>'Tiquisate', 'id_departamento'=>6]);//
         DB::table('municipio')->insert(['nombre'=>'La Gomera', 'id_departamento'=>6]);//
         DB::table('municipio')->insert(['nombre'=>'Guaganazapa', 'id_departamento'=>6]);//
         DB::table('municipio')->insert(['nombre'=>'San José', 'id_departamento'=>6]);//
         DB::table('municipio')->insert(['nombre'=>'Iztapa', 'id_departamento'=>6]);//
         DB::table('municipio')->insert(['nombre'=>'Palín', 'id_departamento'=>6]);//
         DB::table('municipio')->insert(['nombre'=>'San Vicente Pacaya', 'id_departamento'=>6]);//
         DB::table('municipio')->insert(['nombre'=>'Nueva Concepción', 'id_departamento'=>6]);//
         DB::table('municipio')->insert(['nombre'=>'Sipacate', 'id_departamento'=>6]);//

        //huhutnang 33
        DB::table('municipio')->insert(['nombre'=>'Huehuetenango', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Aguacatán', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Chiantla', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Colotenango', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Concepción Huista', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Cuilco', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Jacaltenango', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'La Democracia', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'La Libertad', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Malacatancito', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Nentón', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Petatán', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'San Antonio Huista', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'San Gaspar Ixchil', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'San Ildefonso Ixtahuacán', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'San Juan Atitán', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'San Juan Ixcoy', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'San Mateo Ixtatán', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'San Miguel Acatán', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'San Pedro Necta', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'San Pedro Soloma', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'San Rafael La Independencia', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'San Rafael Petzal', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'San Sebastián Coatán', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'San Sebastián Huehuetenango', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Santa Ana Huista', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Santa Bárbara', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Santa Cruz Barillas', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Santa Eulalia', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Santiago Chimaltenango', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Tectitán', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Todos Santos Cuchumatán', 'id_departamento'=>8]);
        DB::table('municipio')->insert(['nombre'=>'Unión Cantinil', 'id_departamento'=>8]);

        //izabal 5
        DB::table('municipio')->insert(['nombre'=>'Puerto Barrios', 'id_departamento'=>9]);
        DB::table('municipio')->insert(['nombre'=>'El Estor', 'id_departamento'=>9]);
        DB::table('municipio')->insert(['nombre'=>'Livingston', 'id_departamento'=>9]);
        DB::table('municipio')->insert(['nombre'=>'Los Amates', 'id_departamento'=>9]);
        DB::table('municipio')->insert(['nombre'=>'Morales', 'id_departamento'=>9]);

        //jalapa 7
        DB::table('municipio')->insert(['nombre'=>'Jalapa', 'id_departamento'=>10]);
        DB::table('municipio')->insert(['nombre'=>'Mataquescuintla', 'id_departamento'=>10]);
        DB::table('municipio')->insert(['nombre'=>'Monjas', 'id_departamento'=>10]);
        DB::table('municipio')->insert(['nombre'=>'San Carlos Alzatate', 'id_departamento'=>10]);
        DB::table('municipio')->insert(['nombre'=>'San Luis Jilotepeque', 'id_departamento'=>10]);
        DB::table('municipio')->insert(['nombre'=>'San Manuel Chaparrón', 'id_departamento'=>10]);
        DB::table('municipio')->insert(['nombre'=>'San Pedro Pinula', 'id_departamento'=>10]);

        //jutiapa 17
        DB::table('municipio')->insert(['nombre'=>'Jutiapa', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'Agua Blanca', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'Asunción Mita', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'Atescatempa', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'Comapa', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'Conguaco', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'El Adelanto', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'El Progreso', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'Jalpatagua', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'Jerez', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'Moyuta', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'Pasaco', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'Quesada', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'San José Acatempa', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'Santa Catarina Mita', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'Yupiltepeque', 'id_departamento'=>11]);
        DB::table('municipio')->insert(['nombre'=>'Zapotitlán', 'id_departamento'=>11]);
  
        //peten 14
        DB::table('municipio')->insert(['nombre'=>'Flores', 'id_departamento'=>12]);//
        DB::table('municipio')->insert(['nombre'=>'San José', 'id_departamento'=>12]);//
        DB::table('municipio')->insert(['nombre'=>'San Benito', 'id_departamento'=>12]);//
        DB::table('municipio')->insert(['nombre'=>'San Andrés', 'id_departamento'=>12]);//
        DB::table('municipio')->insert(['nombre'=>'La Libertad', 'id_departamento'=>12]);//
        DB::table('municipio')->insert(['nombre'=>'San Francisco', 'id_departamento'=>12]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Ana', 'id_departamento'=>12]);//
        DB::table('municipio')->insert(['nombre'=>'Dolores', 'id_departamento'=>12]);//
        DB::table('municipio')->insert(['nombre'=>'San Luis', 'id_departamento'=>12]);//
        DB::table('municipio')->insert(['nombre'=>'Sayaxché', 'id_departamento'=>12]);//
        DB::table('municipio')->insert(['nombre'=>'Melchor de Mencos', 'id_departamento'=>12]);//
        DB::table('municipio')->insert(['nombre'=>'Poptún', 'id_departamento'=>12]);//
        DB::table('municipio')->insert(['nombre'=>'El Chal', 'id_departamento'=>12]);//
        DB::table('municipio')->insert(['nombre'=>'Las Cruces', 'id_departamento'=>12]);//

        //qutzaltngno 24
        DB::table('municipio')->insert(['nombre'=>'Quetzaltenango', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Almolonga', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Cabricán', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Cajolá', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Cantel', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Coatepeque', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Colomba Costa Cuca', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Concepción Chiquirichapa', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'El Palmar', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Flores Costa Cuca', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Génova', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Huitán', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'La Esperanza', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Olintepeque', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Palestina de los Altos', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Salcajá', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'San Carlos Sija', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'San Francisco La Unión', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'San Juan Ostuncalco', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'San Martín Sacatepéquez', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'San Mateo', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'San Miguel Sigüilá', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Zunil', 'id_departamento'=>13]);//
        DB::table('municipio')->insert(['nombre'=>'Sibilia', 'id_departamento'=>13]);//

        //reu 9
        DB::table('municipio')->insert(['nombre'=>'Retalhuleu', 'id_departamento'=>15]);//
        DB::table('municipio')->insert(['nombre'=>'Champerico', 'id_departamento'=>15]);//
        DB::table('municipio')->insert(['nombre'=>'El Asintal', 'id_departamento'=>15]);//
        DB::table('municipio')->insert(['nombre'=>'Nuevo San Carlos', 'id_departamento'=>15]);//
        DB::table('municipio')->insert(['nombre'=>'San Andrés Villa Seca', 'id_departamento'=>15]);//
        DB::table('municipio')->insert(['nombre'=>'San Felipe Retalhuleu', 'id_departamento'=>15]);//
        DB::table('municipio')->insert(['nombre'=>'San Martín Zapotitlán', 'id_departamento'=>15]);//
        DB::table('municipio')->insert(['nombre'=>'San Sebastián', 'id_departamento'=>15]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Cruz Muluá', 'id_departamento'=>15]);//

        //sacatepqz 16
        DB::table('municipio')->insert(['nombre'=>'Antigua Guatemala', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'Ciudad Vieja', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'Jocotenango', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'Magdalena Milpas Altas', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'Pastores', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'San Antonio Aguas Calientes', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'San Bartolomé Milpas Altas', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'San Juan Alotenango', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'San Lucas Sacatepéquez', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'San Miguel Dueñas', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Catarina Barahona', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Lucía Milpas Altas', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'Santa María de Jesús', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'Santiago Sacatepéquez', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'Santo Domingo Xenacoj', 'id_departamento'=>16]);//
        DB::table('municipio')->insert(['nombre'=>'Sumpango', 'id_departamento'=>16]);//

        //san marcos  30
        DB::table('municipio')->insert(['nombre'=>'San Marcos', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Ayutla', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Catarina', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Comitancillo', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Concepción Tutuapa', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'El Quetzal', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'El Tumbador', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Esquipulas Palo Gordo', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Ixchiguán', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'La Blanca', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'La Reforma', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Malacatán', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Nuevo Progreso', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Ocós', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Pajapita', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Río Blanco', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'San Antonio Sacatepéquez', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'San Cristóbal Cucho', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'San José El Rodeo', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'San José Ojetenam', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'San Lorenzo', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'San Miguel Ixtahuacán', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'San Pablo', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'San Pedro Sacatepéquez', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'San Rafael Pie de la Cuesta', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Sibinal', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Sipacapa', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Tacaná', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Tajumulco', 'id_departamento'=>17]);//
        DB::table('municipio')->insert(['nombre'=>'Tejutla', 'id_departamento'=>17]);//

        //santa rosa14
        DB::table('municipio')->insert(['nombre'=>'Cuilapa', 'id_departamento'=>18]);//
        DB::table('municipio')->insert(['nombre'=>'Barberena', 'id_departamento'=>18]);//
        DB::table('municipio')->insert(['nombre'=>'Casillas', 'id_departamento'=>18]);//
        DB::table('municipio')->insert(['nombre'=>'Chiquimulilla', 'id_departamento'=>18]);//
        DB::table('municipio')->insert(['nombre'=>'Guazacapán', 'id_departamento'=>18]);//
        DB::table('municipio')->insert(['nombre'=>'Nueva Santa Rosa', 'id_departamento'=>18]);//
        DB::table('municipio')->insert(['nombre'=>'Oratorio', 'id_departamento'=>18]);//
        DB::table('municipio')->insert(['nombre'=>'Pueblo Nuevo Viñas', 'id_departamento'=>18]);//
        DB::table('municipio')->insert(['nombre'=>'San Juan Tecuaco', 'id_departamento'=>18]);//
        DB::table('municipio')->insert(['nombre'=>'San Rafael Las Flores', 'id_departamento'=>18]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Cruz Naranjo', 'id_departamento'=>18]);//
        DB::table('municipio')->insert(['nombre'=>'Santa María Ixhuatán', 'id_departamento'=>18]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Rosa de Lima', 'id_departamento'=>18]);//
        DB::table('municipio')->insert(['nombre'=>'Taxisco', 'id_departamento'=>18]);//

        //solola 19
        DB::table('municipio')->insert(['nombre'=>'Sololá', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'Concepción', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'Nahualá', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'Panajachel', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'San Andrés Semetabaj', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'San Antonio Palopó', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'San José Chacayá', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'San Juan La Laguna', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'San Lucas Tolimán', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'San Marcos La Laguna', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'San Pablo La Laguna', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'San Pedro La Laguna', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Catarina Ixtahuacán', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Catarina Palopó', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Clara La Laguna', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Lucía Utatlán', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'Santa María Visitación', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'Santiago Atitlán', 'id_departamento'=>19]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Cruz La Laguna', 'id_departamento'=>19]);//

        //suchi 21
        DB::table('municipio')->insert(['nombre'=>'Mazatenango', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'Chicacao', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'Cuyotenango', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'Patulul', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'Pueblo Nuevo', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'Río Bravo', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'Samayac', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'San Antonio Suchitepéquez', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'San Bernardino', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'San Francisco Zapotitlán', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'San Gabriel', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'San José El Ídolo', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'San José La Máquina', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'San Juan Bautista', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'San Lorenzo', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'San Miguel Panán', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'San Pablo Jocopilas', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Bárbara', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'Santo Domingo Suchitepéquez', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'Santo Tomás La Unión', 'id_departamento'=>20]);//
        DB::table('municipio')->insert(['nombre'=>'Zunilito', 'id_departamento'=>20]);//

        //toto 8
        DB::table('municipio')->insert(['nombre'=>'Totonicapán', 'id_departamento'=>21]);//
        DB::table('municipio')->insert(['nombre'=>'Momostenango', 'id_departamento'=>21]);//
        DB::table('municipio')->insert(['nombre'=>'San Andrés Xecul', 'id_departamento'=>21]);//
        DB::table('municipio')->insert(['nombre'=>'San Bartolo Aguas Calientes', 'id_departamento'=>21]);//
        DB::table('municipio')->insert(['nombre'=>'San Cristóbal Totonicapán', 'id_departamento'=>21]);//
        DB::table('municipio')->insert(['nombre'=>'San Francisco El Alto', 'id_departamento'=>21]);//
        DB::table('municipio')->insert(['nombre'=>'Santa Lucía La Reforma', 'id_departamento'=>21]);//
        DB::table('municipio')->insert(['nombre'=>'Santa María Chiquimula', 'id_departamento'=>21]);//

        //zacapa 11
        DB::table('municipio')->insert(['nombre'=>'Zacapa', 'id_departamento'=>22]);//
        DB::table('municipio')->insert(['nombre'=>'Cabañas', 'id_departamento'=>22]);//
        DB::table('municipio')->insert(['nombre'=>'Estanzuela', 'id_departamento'=>22]);//
        DB::table('municipio')->insert(['nombre'=>'Gualán', 'id_departamento'=>22]);//
        DB::table('municipio')->insert(['nombre'=>'Huité', 'id_departamento'=>22]);//
        DB::table('municipio')->insert(['nombre'=>'La Unión', 'id_departamento'=>22]);//
        DB::table('municipio')->insert(['nombre'=>'Río Hondo', 'id_departamento'=>22]);//
        DB::table('municipio')->insert(['nombre'=>'San Diego', 'id_departamento'=>22]);//
        DB::table('municipio')->insert(['nombre'=>'San Jorge', 'id_departamento'=>22]);//
        DB::table('municipio')->insert(['nombre'=>'Teculután', 'id_departamento'=>22]);//
        DB::table('municipio')->insert(['nombre'=>'Usumatlán', 'id_departamento'=>22]);//

       










    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipio');
    }
}

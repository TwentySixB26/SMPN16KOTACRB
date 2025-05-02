<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Murid;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User'
        //     'email' => 'test@example.com',
        // ]);



        // Guru
        User::create([
            'NIP' => '196503151987031010 ' ,
            'name' => 'Karnadi, S.Pd, M.Hum' ,
            'gol' => 'IV/c',
            'admin' => 1 ,
            'alamat' => 'cirebon',
            'password' => bcrypt('password')
        ]) ;

        User::create([
            'NIP' => '8640771672130172' ,
            'name' => 'HAMDAN NURAMDANI, S.Pd., M.Pd' ,
            'gol' => '-',
            'admin' => 1 ,
            'alamat' => 'cirebon',
            'password' => bcrypt('password')
        ]) ;

        User::create([
            'NIP' => '200007172024212000' ,
            'name' => 'Rumdahlia, S.Pd' ,
            'gol' => 'IX',
            'admin' => 0 ,
            'alamat' => 'cirebon',
            'password' => bcrypt('password')
        ]) ;

        User::create([
            'NIP' => '7438760661300042' ,
            'name' => 'Eva Maktummah, S.Pd' ,
            'gol' => '-',
            'admin' => 0 ,
            'alamat' => 'cirebon',
            'password' => bcrypt('password')
        ]) ;

        User::create([
            'NIP' => '2203040039' ,
            'name' => 'Bayu Test' ,
            'gol' => '-',
            'admin' => 1 ,
            'alamat' => 'cirebon',
            'password' => bcrypt('password')
        ]) ;


        // mapel
        Mapel::create(['name_mapel' => 'Informatika' ]) ;
        Mapel::create(['name_mapel' => 'IPA Terpadu' ]) ;
        Mapel::create(['name_mapel' => 'Bahasa Cirebon' ]) ;
        Mapel::create(['name_mapel' => 'PAI' ]) ;
        Mapel::create(['name_mapel' => 'Budi Pekerti' ]) ;
        Mapel::create(['name_mapel' => 'Bahasa Inggris' ]) ;
        Mapel::create(['name_mapel' => 'Pendidikan Pancasila' ]) ;
        Mapel::create(['name_mapel' => 'BK' ]) ;
        Mapel::create(['name_mapel' => 'PJOK' ]) ;
        Mapel::create(['name_mapel' => 'Prakarya' ]) ;
        Mapel::create(['name_mapel' => 'Matematika' ]) ;
        Mapel::create(['name_mapel' => 'Bahasa Indonesia' ]) ;
        Mapel::create(['name_mapel' => 'IPS Terpadu' ]) ;



        // kelas
        Kelas::create(['name_kelas' => '7A']);
        Kelas::create(['name_kelas' => '7B']);
        Kelas::create(['name_kelas' => '7C']);
        Kelas::create(['name_kelas' => '7D']);
        Kelas::create(['name_kelas' => '7E']);
        Kelas::create(['name_kelas' => '7F']);
        Kelas::create(['name_kelas' => '7G']);
        Kelas::create(['name_kelas' => '7H']);

        Kelas::create(['name_kelas' => '8A']);
        Kelas::create(['name_kelas' => '8B']);
        Kelas::create(['name_kelas' => '8C']);
        Kelas::create(['name_kelas' => '8D']);
        Kelas::create(['name_kelas' => '8E']);
        Kelas::create(['name_kelas' => '8F']);
        Kelas::create(['name_kelas' => '8G']);
        Kelas::create(['name_kelas' => '8H']);
        Kelas::create(['name_kelas' => '8I']);

        Kelas::create(['name_kelas' => '9A']);
        Kelas::create(['name_kelas' => '9B']);
        Kelas::create(['name_kelas' => '9C']);
        Kelas::create(['name_kelas' => '9D']);
        Kelas::create(['name_kelas' => '9E']);
        Kelas::create(['name_kelas' => '9F']);
        Kelas::create(['name_kelas' => '9G']);
        Kelas::create(['name_kelas' => '9H']);





        // guru_mapel
        $hamdanNuramdani= User::find(2);
        $hamdanNuramdani->guruMapel()->attach([6]);

        $rumdahlia = User::find(3);
        $rumdahlia->guruMapel()->attach([1, 2]);


        $evaMaktummah = User::find(4);
        $evaMaktummah->guruMapel()->attach([3, 6]);

        $ba = User::find(5);
        $ba->guruMapel()->attach([1, 3]);



        // murid
        Murid::create([
            'NIS' => '232407180' ,
            'NISN' => '0112242008' ,
            'name' => 'ABDURRAHMAN JUNAEDI AR RASYID' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create([
            'NIS' => '232407181' ,
            'NISN' => '0101315634' ,
            'name' => 'ADE IBNU VIGUNA' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create([
            'NIS' => '232407182' ,
            'NISN' => '0109486014' ,
            'name' => 'AFFAN YAFIQ AL BAIHAQI' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407183' ,
            'NISN' => '3111508486' ,
            'name' => 'ALIYA WULANDARI' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;


        Murid::create(attributes: [
            'NIS' => '232407184' ,
            'NISN' => '0117361336' ,
            'name' => 'AURELIA ZHASKYA' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;


        Murid::create(attributes: [
            'NIS' => '232407185' ,
            'NISN' => '3114156687' ,
            'name' => 'DANU ILAHI' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407186' ,
            'NISN' => '0111063649' ,
            'name' => 'DELAP SYARUL RIVAL' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407187' ,
            'NISN' => '0101346579' ,
            'name' => 'DEWI ARIMBI DESTIA' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407188' ,
            'NISN' => '0117722037' ,
            'name' => 'EKY FADILLAH' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407189' ,
            'NISN' => '0116110208' ,
            'name' => 'FARHAN DWI SEPTIAN' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407190' ,
            'NISN' => '0116419170' ,
            'name' => 'FEISYA CAHYANING PURYA' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407191' ,
            'NISN' => '0115270540' ,
            'name' => 'GEREEL ADITYA PRATAMA' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407192' ,
            'NISN' => '0123342783' ,
            'name' => 'GHIPARI FIRMANSYAH' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407193' ,
            'NISN' => '0106526775' ,
            'name' => 'GRAHA PUTRA MULYANA' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407194' ,
            'NISN' => '0114023948' ,
            'name' => 'INDAH SETIANA' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407195' ,
            'NISN' => '0105188192' ,
            'name' => 'KANIA PUTRI' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407196' ,
            'NISN' => '0109731912' ,
            'name' => 'KENIA WIDIATI' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407197' ,
            'NISN' => '3119872817' ,
            'name' => 'KHANZA ALIYA DEAZ' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407198' ,
            'NISN' => '0115921873' ,
            'name' => 'MADURATNA SYABANI ZAEN' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407199' ,
            'NISN' => '0117437640' ,
            'name' => 'MEISHA ADINDA PUTRI' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407200' ,
            'NISN' => '0118541603' ,
            'name' => 'MEYSA FRASTIKA' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407201' ,
            'NISN' => '0111351586' ,
            'name' => 'MICHELLE GRACELLA TAN' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407202' ,
            'NISN' => '0112047668' ,
            'name' => 'MUHAMMAD NAUFAL AZIZ' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407203' ,
            'NISN' => '0111809632' ,
            'name' => 'NESEA AYU MEYLIZZAH' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;


        Murid::create(attributes: [
            'NIS' => '232407204' ,
            'NISN' => '0119463304' ,
            'name' => 'NUR HASANAH ' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407205' ,
            'NISN' => '0092154671' ,
            'name' => 'PIPIT RAMADHANI' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407206' ,
            'NISN' => '0115614817' ,
            'name' => 'PUTERI ANANDHITA SARI' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407207' ,
            'NISN' => '0112757831' ,
            'name' => 'PUTRI KHOIRUN NIZA' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407208' ,
            'NISN' => '3109309771' ,
            'name' => 'RAEIYZA VALENTINO' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407209' ,
            'NISN' => '0116440187' ,
            'name' => 'RAFFA IZAM PUTRA' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;


        Murid::create(attributes: [
            'NIS' => '232407210' ,
            'NISN' => '0113188775' ,
            'name' => 'RANGGANIS' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;


        Murid::create(attributes: [
            'NIS' => '232407211' ,
            'NISN' => '0112735296' ,
            'name' => 'RATU GENDIS NURSULIMA SEMININGRAT' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407212' ,
            'NISN' => '0111987772' ,
            'name' => 'RIZKY ADITYA' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;


        Murid::create(attributes: [
            'NIS' => '232407213' ,
            'NISN' => '0114452007' ,
            'name' => 'SILVI SUNDARI' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;


        Murid::create(attributes: [
            'NIS' => '232407214' ,
            'NISN' => '0113870647' ,
            'name' => 'YOHANES HANDI SUTRISNO' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;

        Murid::create(attributes: [
            'NIS' => '232407215' ,
            'NISN' => '0115332657' ,
            'name' => 'ZULFATUL ULUMIYAH' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 14
        ]) ;



        Murid::create(attributes: [
            'NIS' => '666' ,
            'NISN' => '666' ,
            'name' => 'Test 1' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 1
        ]) ;

        Murid::create(attributes: [
            'NIS' => '667' ,
            'NISN' => '667' ,
            'name' => 'Test 2' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 1
        ]) ;

        Murid::create(attributes: [
            'NIS' => '668' ,
            'NISN' => '668' ,
            'name' => 'Test 3' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 1
        ]) ;



        Murid::create(attributes: [
            'NIS' => '776' ,
            'NISN' => '776' ,
            'name' => 'Test 1' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 19
        ]) ;

        Murid::create(attributes: [
            'NIS' => '777' ,
            'NISN' => '777' ,
            'name' => 'Test 2' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 19
        ]) ;

        Murid::create(attributes: [
            'NIS' => '778' ,
            'NISN' => '778' ,
            'name' => 'Test 3' ,
            'alamat' => 'Cirebon Kota' ,
            'kelas_id' => 19
        ]) ;





        //jadwal
        $kelas8F = Kelas::find(14);
        $kelas8F->jadwal()->attach([2, 3]);

        $kelas8F02 = Kelas::find(14);
        $kelas8F02->jadwal()->attach([4]);

        $kelas8G = Kelas::find(15);
        $kelas8G->jadwal()->attach([2]);

        $kelas7a = Kelas::find(1);
        $kelas7a->jadwal()->attach([6,7]);

        $kelas7b = Kelas::find(2);
        $kelas7b->jadwal()->attach([6,7]);

    }
}

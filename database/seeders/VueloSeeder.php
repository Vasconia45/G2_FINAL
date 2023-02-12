<?php

namespace Database\Seeders;

use App\Models\Aeropuerto;
use App\Models\Vuelo;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VueloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vuelo1=new Vuelo();
        $vuelo1->aeropuerto_origen=Aeropuerto::find(1)->nombre;
        $vuelo1->aeropuerto_destino=Aeropuerto::find(6)->nombre;
        $vuelo1->cantidad_pasajeros=rand(0,200);
        $vuelo1->compañia="Vueling";
        $vuelo1->fecha=Carbon::now();
        $vuelo1->precio=rand(1,150);
        $vuelo1->save();

        $vuelo4=new Vuelo();
        $vuelo4->aeropuerto_origen=Aeropuerto::find(1)->nombre;
        $vuelo4->aeropuerto_destino=Aeropuerto::find(9)->nombre;
        $vuelo4->cantidad_pasajeros=rand(0,200);
        $vuelo4->compañia="Vueling";
        $vuelo4->fecha=Carbon::now();
        $vuelo4->precio=rand(1,150);
        $vuelo4->save();

        $vuelo6=new Vuelo();
        $vuelo6->aeropuerto_origen=Aeropuerto::find(10)->nombre;
        $vuelo6->aeropuerto_destino=Aeropuerto::find(11)->nombre;
        $vuelo6->cantidad_pasajeros=rand(0,200);
        $vuelo6->compañia="Vueling";
        $vuelo6->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo6->precio=rand(80,400);
        $vuelo6->save();

        $vuelo7=new Vuelo();
        $vuelo7->aeropuerto_origen=Aeropuerto::find(12)->nombre;
        $vuelo7->aeropuerto_destino=Aeropuerto::find(13)->nombre;
        $vuelo7->cantidad_pasajeros=rand(0,200);
        $vuelo7->compañia="Vueling";
        $vuelo7->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo7->precio=rand(80,400);
        $vuelo7->save();

        $vuelo10=new Vuelo();
        $vuelo10->aeropuerto_origen="Aeropuerto de Vitoria (VIT)";
        $vuelo10->aeropuerto_destino="Guangzhou Baiyun International Airport";
        $vuelo10->cantidad_pasajeros=rand(0,200);
        $vuelo10->compañia="Avianca";
        $vuelo10->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo10->precio=rand(80,400);
        $vuelo10->save();

        //-----------------------------

        
        $vuelo11=new Vuelo();
        $vuelo11->aeropuerto_origen="Guangzhou Baiyun International Airport";
        $vuelo11->aeropuerto_destino="Arkansas International Airport";
        $vuelo11->cantidad_pasajeros=rand(0,200);
        $vuelo11->compañia="American Airlines";
        $vuelo11->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo11->precio=rand(80,400);
        $vuelo11->save();

        $vuelo5=new Vuelo();
        $vuelo5->aeropuerto_origen=Aeropuerto::find(1)->nombre;
        $vuelo5->aeropuerto_destino=Aeropuerto::find(5)->nombre;
        $vuelo5->cantidad_pasajeros=rand(0,200);
        $vuelo5->compañia="Vueling";
        $vuelo5->fecha=Carbon::now();
        $vuelo5->precio=rand(1,150);
        $vuelo5->save();

        //-----------------------------

        
        $vuelo12=new Vuelo();
        $vuelo12->aeropuerto_origen="Aeropuerto de París-Charles de Gaulle";
        $vuelo12->aeropuerto_destino="Eindhoven Airport";
        $vuelo12->cantidad_pasajeros=rand(0,200);
        $vuelo12->compañia="BOA";
        $vuelo12->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo12->precio=rand(80,400);
        $vuelo12->save();

        //-----------------------------

        
        $vuelo13=new Vuelo();
        $vuelo13->aeropuerto_origen="Eindhoven Airport";
        $vuelo13->aeropuerto_destino="Las Cruces International Airport";
        $vuelo13->cantidad_pasajeros=rand(0,200);
        $vuelo13->compañia="Air Europa";
        $vuelo13->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo13->precio=rand(80,400);
        $vuelo13->save();

        //-----------------------------

        
        $vuelo14=new Vuelo();
        $vuelo14->aeropuerto_origen="Arkansas International Airport";
        $vuelo14->aeropuerto_destino="Guangzhou Baiyun International Airport";
        $vuelo14->cantidad_pasajeros=rand(0,200);
        $vuelo14->compañia="Air Europa";
        $vuelo14->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo14->precio=rand(80,400);
        $vuelo14->save();

        //-----------------------------

        
        $vuelo15=new Vuelo();
        $vuelo15->aeropuerto_origen="Aeropuerto de Vitoria (VIT)";
        $vuelo15->aeropuerto_destino="Hartsfield–Jackson Atlanta International Airport";
        $vuelo15->cantidad_pasajeros=rand(0,200);
        $vuelo15->compañia="Avianca";
        $vuelo15->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo15->precio=rand(80,400);
        $vuelo15->save();

        //-----------------------------

        
        $vuelo16=new Vuelo();
        $vuelo16->aeropuerto_origen="Istanbul Airport";
        $vuelo16->aeropuerto_destino="Aeropuerto de París-Charles de Gaulle";
        $vuelo16->cantidad_pasajeros=rand(0,200);
        $vuelo16->compañia="American Airlines";
        $vuelo16->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo16->precio=rand(80,400);
        $vuelo16->save();

        $vuelo2=new Vuelo();
        $vuelo2->aeropuerto_origen=Aeropuerto::find(1)->nombre;
        $vuelo2->aeropuerto_destino=Aeropuerto::find(7)->nombre;
        $vuelo2->cantidad_pasajeros=rand(0,200);
        $vuelo2->compañia="Vueling";
        $vuelo2->fecha=Carbon::now();
        $vuelo2->precio=rand(1,150);
        $vuelo2->save();

        //-----------------------------

        
        $vuelo17=new Vuelo();
        $vuelo17->aeropuerto_origen="Las Cruces International Airport";
        $vuelo17->aeropuerto_destino="ท่าอากาศยานนานาชาติหาดใหญ่";
        $vuelo17->cantidad_pasajeros=rand(0,200);
        $vuelo17->compañia="Air Europa";
        $vuelo17->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo17->precio=rand(80,400);
        $vuelo17->save();

        //-----------------------------

        
        $vuelo18=new Vuelo();
        $vuelo18->aeropuerto_origen="Eindhoven Airport";
        $vuelo18->aeropuerto_destino="Aeropuerto de Vitoria (VIT)";
        $vuelo18->cantidad_pasajeros=rand(0,200);
        $vuelo18->compañia="British Airways";
        $vuelo18->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo18->precio=rand(80,400);
        $vuelo18->save();

        //-----------------------------

        
        $vuelo19=new Vuelo();
        $vuelo19->aeropuerto_origen="Aeropuerto de París-Charles de Gaulle";
        $vuelo19->aeropuerto_destino="Guangzhou Baiyun International Airport";
        $vuelo19->cantidad_pasajeros=rand(0,200);
        $vuelo19->compañia="Avianca";
        $vuelo19->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo19->precio=rand(80,400);
        $vuelo19->save();

        $vuelo3=new Vuelo();
        $vuelo3->aeropuerto_origen=Aeropuerto::find(1)->nombre;
        $vuelo3->aeropuerto_destino=Aeropuerto::find(8)->nombre;
        $vuelo3->cantidad_pasajeros=rand(0,200);
        $vuelo3->compañia="Vueling";
        $vuelo3->fecha=Carbon::now();
        $vuelo3->precio=rand(1,150);
        $vuelo3->save();

        //-----------------------------

        
        $vuelo20=new Vuelo();
        $vuelo20->aeropuerto_origen="Las Cruces International Airport";
        $vuelo20->aeropuerto_destino="Aeropuerto de Vitoria (VIT)";
        $vuelo20->cantidad_pasajeros=rand(0,200);
        $vuelo20->compañia="BOA";
        $vuelo20->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo20->precio=rand(80,400);
        $vuelo20->save();

        //-----------------------------

        
        $vuelo21=new Vuelo();
        $vuelo21->aeropuerto_origen="Aeropuerto de San Sebastián (EAS)";
        $vuelo21->aeropuerto_destino="Aeropuerto de Vitoria (VIT)";
        $vuelo21->cantidad_pasajeros=rand(0,200);
        $vuelo21->compañia="American Airlines";
        $vuelo21->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo21->precio=rand(80,400);
        $vuelo21->save();

        //----------------------------

        
        $vuelo22=new Vuelo();
        $vuelo22->aeropuerto_origen="Arkansas International Airport";
        $vuelo22->aeropuerto_destino="Istanbul Airport";
        $vuelo22->cantidad_pasajeros=rand(0,200);
        $vuelo22->compañia="Air Europa";
        $vuelo22->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo22->precio=rand(80,400);
        $vuelo22->save();

        //-----------------------------

        
        $vuelo23=new Vuelo();
        $vuelo23->aeropuerto_origen="Aeropuerto de Vitoria (VIT)";
        $vuelo23->aeropuerto_destino="Aeropuerto de París-Charles de Gaulle";
        $vuelo23->cantidad_pasajeros=rand(0,200);
        $vuelo23->compañia="British Airways";
        $vuelo23->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo23->precio=rand(80,400);
        $vuelo23->save();

        //-----------------------------

        
        $vuelo24=new Vuelo();
        $vuelo24->aeropuerto_origen="Hartsfield–Jackson Atlanta International Airport";
        $vuelo24->aeropuerto_destino="Arkansas International Airport";
        $vuelo24->cantidad_pasajeros=rand(0,200);
        $vuelo24->compañia="Avianca";
        $vuelo24->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo24->precio=rand(80,400);
        $vuelo24->save();

        //-----------------------------

        
        $vuelo25=new Vuelo();
        $vuelo25->aeropuerto_origen="Eindhoven Airport";
        $vuelo25->aeropuerto_destino="Guangzhou Baiyun International Airport";
        $vuelo25->cantidad_pasajeros=rand(0,200);
        $vuelo25->compañia="American Airlines";
        $vuelo25->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo25->precio=rand(80,400);
        $vuelo25->save();

        //-----------------------------

        
        $vuelo26=new Vuelo();
        $vuelo26->aeropuerto_origen="Hartsfield–Jackson Atlanta International Airport";
        $vuelo26->aeropuerto_destino="ท่าอากาศยานนานาชาติหาดใหญ่";
        $vuelo26->cantidad_pasajeros=rand(0,200);
        $vuelo26->compañia="Avianca";
        $vuelo26->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo26->precio=rand(80,400);
        $vuelo26->save();

        //-----------------------------

        
        $vuelo27=new Vuelo();
        $vuelo27->aeropuerto_origen="Fort Lauderdale–Hollywood International Airport";
        $vuelo27->aeropuerto_destino="Arkansas International Airport";
        $vuelo27->cantidad_pasajeros=rand(0,200);
        $vuelo27->compañia="British Airways";
        $vuelo27->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo27->precio=rand(80,400);
        $vuelo27->save();

        //-----------------------------

        
        $vuelo28=new Vuelo();
        $vuelo28->aeropuerto_origen="Tokyo Haneda Airport";
        $vuelo28->aeropuerto_destino="Aeropuerto de Vitoria (VIT)";
        $vuelo28->cantidad_pasajeros=rand(0,200);
        $vuelo28->compañia="Avianca";
        $vuelo28->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo28->precio=rand(80,400);
        $vuelo28->save();

        //-----------------------------

        
        $vuelo29=new Vuelo();
        $vuelo29->aeropuerto_origen="Aeropuerto de París-Charles de Gaulle";
        $vuelo29->aeropuerto_destino="Hartsfield–Jackson Atlanta International Airport";
        $vuelo29->cantidad_pasajeros=rand(0,200);
        $vuelo29->compañia="American Airlines";
        $vuelo29->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo29->precio=rand(80,400);
        $vuelo29->save();

        //-----------------------------

        
        $vuelo30=new Vuelo();
        $vuelo30->aeropuerto_origen="Istanbul Airport";
        $vuelo30->aeropuerto_destino="Aeropuerto de San Sebastián (EAS)";
        $vuelo30->cantidad_pasajeros=rand(0,200);
        $vuelo30->compañia="British Airways";
        $vuelo30->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo30->precio=rand(80,400);
        $vuelo30->save();

        //-----------------------------

        
        $vuelo31=new Vuelo();
        $vuelo31->aeropuerto_origen="Groningen Airport Eelde";
        $vuelo31->aeropuerto_destino="Eindhoven Airport";
        $vuelo31->cantidad_pasajeros=rand(0,200);
        $vuelo31->compañia="Air Europa";
        $vuelo31->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo31->precio=rand(80,400);
        $vuelo31->save();

        //-----------------------------

        
        $vuelo32=new Vuelo();
        $vuelo32->aeropuerto_origen="Aeropuerto de San Sebastián (EAS)";
        $vuelo32->aeropuerto_destino="Fort Lauderdale–Hollywood International Airport";
        $vuelo32->cantidad_pasajeros=rand(0,200);
        $vuelo32->compañia="Avianca";
        $vuelo32->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo32->precio=rand(80,400);
        $vuelo32->save();

        //-----------------------------

        
        $vuelo33=new Vuelo();
        $vuelo33->aeropuerto_origen="Groningen Airport Eelde";
        $vuelo33->aeropuerto_destino="Aeropuerto de Vitoria (VIT)";
        $vuelo33->cantidad_pasajeros=rand(0,200);
        $vuelo33->compañia="Avianca";
        $vuelo33->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo33->precio=rand(80,400);
        $vuelo33->save();

        //-----------------------------

        
        $vuelo34=new Vuelo();
        $vuelo34->aeropuerto_origen="Hartsfield–Jackson Atlanta International Airport";
        $vuelo34->aeropuerto_destino="Aeropuerto de Barajas";
        $vuelo34->cantidad_pasajeros=rand(0,200);
        $vuelo34->compañia="American Airlines";
        $vuelo34->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo34->precio=rand(80,400);
        $vuelo34->save();

        //-----------------------------

        
        $vuelo35=new Vuelo();
        $vuelo35->aeropuerto_origen="Aeropuerto de Bilbao (BIO)";
        $vuelo35->aeropuerto_destino="Tokyo Haneda Airport";
        $vuelo35->cantidad_pasajeros=rand(0,200);
        $vuelo35->compañia="BOA";
        $vuelo35->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo35->precio=rand(80,400);
        $vuelo35->save();

        //-----------------------------

        
        $vuelo36=new Vuelo();
        $vuelo36->aeropuerto_origen="Fort Lauderdale–Hollywood International Airport";
        $vuelo36->aeropuerto_destino="Istanbul Airport";
        $vuelo36->cantidad_pasajeros=rand(0,200);
        $vuelo36->compañia="British Airways";
        $vuelo36->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo36->precio=rand(80,400);
        $vuelo36->save();

        //-----------------------------

        
        $vuelo37=new Vuelo();
        $vuelo37->aeropuerto_origen="Guangzhou Baiyun International Airport";
        $vuelo37->aeropuerto_destino="Aeropuerto de París-Charles de Gaulle";
        $vuelo37->cantidad_pasajeros=rand(0,200);
        $vuelo37->compañia="Air Europa";
        $vuelo37->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo37->precio=rand(80,400);
        $vuelo37->save();

        //-----------------------------

        
        $vuelo38=new Vuelo();
        $vuelo38->aeropuerto_origen="Bucholz Army Airfield";
        $vuelo38->aeropuerto_destino="Groningen Airport Eelde";
        $vuelo38->cantidad_pasajeros=rand(0,200);
        $vuelo38->compañia="Avianca";
        $vuelo38->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo38->precio=rand(80,400);
        $vuelo38->save();

        //-----------------------------

        
        $vuelo39=new Vuelo();
        $vuelo39->aeropuerto_origen="ท่าอากาศยานนานาชาติหาดใหญ่";
        $vuelo39->aeropuerto_destino="Las Cruces International Airport";
        $vuelo39->cantidad_pasajeros=rand(0,200);
        $vuelo39->compañia="Avianca";
        $vuelo39->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo39->precio=rand(80,400);
        $vuelo39->save();

        //-----------------------------

        
        $vuelo40=new Vuelo();
        $vuelo40->aeropuerto_origen="Groningen Airport Eelde";
        $vuelo40->aeropuerto_destino="Aeropuerto de Bilbao (BIO)";
        $vuelo40->cantidad_pasajeros=rand(0,200);
        $vuelo40->compañia="American Airlines";
        $vuelo40->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo40->precio=rand(80,400);
        $vuelo40->save();

        //-----------------------------

        
        $vuelo41=new Vuelo();
        $vuelo41->aeropuerto_origen="Tokyo Haneda Airport";
        $vuelo41->aeropuerto_destino="Aeropuerto de Vitoria (VIT)";
        $vuelo41->cantidad_pasajeros=rand(0,200);
        $vuelo41->compañia="Air Europa";
        $vuelo41->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo41->precio=rand(80,400);
        $vuelo41->save();

        //-----------------------------

        
        $vuelo42=new Vuelo();
        $vuelo42->aeropuerto_origen="Istanbul Airport";
        $vuelo42->aeropuerto_destino="Københavns Lufthavn";
        $vuelo42->cantidad_pasajeros=rand(0,200);
        $vuelo42->compañia="British Airways";
        $vuelo42->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo42->precio=rand(80,400);
        $vuelo42->save();

        //-----------------------------

        
        $vuelo43=new Vuelo();
        $vuelo43->aeropuerto_origen="Aeropuerto de San Sebastián (EAS)";
        $vuelo43->aeropuerto_destino="Aeropuerto de París-Charles de Gaulle";
        $vuelo43->cantidad_pasajeros=rand(0,200);
        $vuelo43->compañia="American Airlines";
        $vuelo43->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo43->precio=rand(80,400);
        $vuelo43->save();

        //-----------------------------

        
        $vuelo44=new Vuelo();
        $vuelo44->aeropuerto_origen="Fort Lauderdale–Hollywood International Airport";
        $vuelo44->aeropuerto_destino="Aeropuerto de Bilbao (BIO)";
        $vuelo44->cantidad_pasajeros=rand(0,200);
        $vuelo44->compañia="Avianca";
        $vuelo44->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo44->precio=rand(80,400);
        $vuelo44->save();

        //-----------------------------

        
        $vuelo45=new Vuelo();
        $vuelo45->aeropuerto_origen="Aeropuerto de Barajas";
        $vuelo45->aeropuerto_destino="Las Cruces International Airport";
        $vuelo45->cantidad_pasajeros=rand(0,200);
        $vuelo45->compañia="Air Europa";
        $vuelo45->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo45->precio=rand(80,400);
        $vuelo45->save();

        //-----------------------------

        
        $vuelo46=new Vuelo();
        $vuelo46->aeropuerto_origen="Guangzhou Baiyun International Airport";
        $vuelo46->aeropuerto_destino="Istanbul Airport";
        $vuelo46->cantidad_pasajeros=rand(0,200);
        $vuelo46->compañia="British Airways";
        $vuelo46->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo46->precio=rand(80,400);
        $vuelo46->save();

        //-----------------------------

        
        $vuelo47=new Vuelo();
        $vuelo47->aeropuerto_origen="Københavns Lufthavn";
        $vuelo47->aeropuerto_destino="Bucholz Army Airfield";
        $vuelo47->cantidad_pasajeros=rand(0,200);
        $vuelo47->compañia="Air Europa";
        $vuelo47->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo47->precio=rand(80,400);
        $vuelo47->save();

        //-----------------------------

        
        $vuelo48=new Vuelo();
        $vuelo48->aeropuerto_origen="ท่าอากาศยานนานาชาติหาดใหญ่";
        $vuelo48->aeropuerto_destino="Aeropuerto de San Sebastián (EAS)";
        $vuelo48->cantidad_pasajeros=rand(0,200);
        $vuelo48->compañia="Air Europa";
        $vuelo48->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo48->precio=rand(80,400);
        $vuelo48->save();

        //-----------------------------

        
        $vuelo49=new Vuelo();
        $vuelo49->aeropuerto_origen="Port Lotniczy Bydgoszcz-Szwederowo";
        $vuelo49->aeropuerto_destino="Tokyo Haneda Airport";
        $vuelo49->cantidad_pasajeros=rand(0,200);
        $vuelo49->compañia="British Airways";
        $vuelo49->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo49->precio=rand(80,400);
        $vuelo49->save();

        //-----------------------------

        
        $vuelo50=new Vuelo();
        $vuelo50->aeropuerto_origen="Aeropuerto de Vitoria (VIT)";
        $vuelo50->aeropuerto_destino="Guangzhou Baiyun International Airport";
        $vuelo50->cantidad_pasajeros=rand(0,200);
        $vuelo50->compañia="ALSA";
        $vuelo50->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo50->precio=rand(80,400);
        $vuelo50->save();

        //-----------------------------

        
        $vuelo51=new Vuelo();
        $vuelo51->aeropuerto_origen="Københavns Lufthavn";
        $vuelo51->aeropuerto_destino="Port Lotniczy Bydgoszcz-Szwederowo";
        $vuelo51->cantidad_pasajeros=rand(0,200);
        $vuelo51->compañia="Avianca";
        $vuelo51->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo51->precio=rand(80,400);
        $vuelo51->save();

        //-----------------------------

        
        $vuelo52=new Vuelo();
        $vuelo52->aeropuerto_origen="Aeropuerto de Bilbao (BIO)";
        $vuelo52->aeropuerto_destino="Istanbul Airport";
        $vuelo52->cantidad_pasajeros=rand(0,200);
        $vuelo52->compañia="British Airways";
        $vuelo52->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo52->precio=rand(80,400);
        $vuelo52->save();

        //-----------------------------
        
        $vuelo53=new Vuelo();
        $vuelo53->aeropuerto_origen="Aeropuerto de Barajas";
        $vuelo53->aeropuerto_destino="Aeropuerto de París-Charles de Gaulle";
        $vuelo53->cantidad_pasajeros=rand(0,200);
        $vuelo53->compañia="BOA";
        $vuelo53->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo53->precio=rand(80,400);
        $vuelo53->save();

        //-----------------------------

        
        $vuelo54=new Vuelo();
        $vuelo54->aeropuerto_origen="Aeropuerto de San Sebastián (EAS)";
        $vuelo54->aeropuerto_destino="ท่าอากาศยานนานาชาติหาดใหญ่";
        $vuelo54->cantidad_pasajeros=rand(0,200);
        $vuelo54->compañia="Avianca";
        $vuelo54->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo54->precio=rand(80,400);
        $vuelo54->save();

        //-----------------------------

        
        $vuelo55=new Vuelo();
        $vuelo55->aeropuerto_origen="Aeropuerto de Bilbao (BIO)";
        $vuelo55->aeropuerto_destino="Port Lotniczy Bydgoszcz-Szwederowo";
        $vuelo55->cantidad_pasajeros=rand(0,200);
        $vuelo55->compañia="American Airlines";
        $vuelo55->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo55->precio=rand(80,400);
        $vuelo55->save();

        //-----------------------------
        
        $vuelo56=new Vuelo();
        $vuelo56->aeropuerto_origen="Tokyo Haneda Airport";
        $vuelo56->aeropuerto_destino="Port Lotniczy Bydgoszcz-Szwederowo";
        $vuelo56->cantidad_pasajeros=rand(0,200);
        $vuelo56->compañia="British Airways";
        $vuelo56->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo56->precio=rand(80,400);
        $vuelo56->save();

        //-----------------------------

        
        $vuelo57=new Vuelo();
        $vuelo57->aeropuerto_origen="Fort Lauderdale–Hollywood International Airport";
        $vuelo57->aeropuerto_destino="Aeropuerto de Bilbao (BIO)";
        $vuelo57->cantidad_pasajeros=rand(0,200);
        $vuelo57->compañia="Avianca";
        $vuelo57->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo57->precio=rand(80,400);
        $vuelo57->save();

        //-------------------------------------------------

        
        $vuelo58=new Vuelo();
        $vuelo58->aeropuerto_origen="Aeropuerto de Vitoria (VIT)";
        $vuelo58->aeropuerto_destino="Københavns Lufthavn";
        $vuelo58->cantidad_pasajeros=rand(0,200);
        $vuelo58->compañia="Air Europa";
        $vuelo58->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo58->precio=rand(80,400);
        $vuelo58->save();

        //-----------------------------

        
        $vuelo59=new Vuelo();
        $vuelo59->aeropuerto_origen="Guangzhou Baiyun International Airport";
        $vuelo59->aeropuerto_destino="Bucholz Army Airfield";
        $vuelo59->cantidad_pasajeros=rand(0,200);
        $vuelo59->compañia="British Airways";
        $vuelo59->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo59->precio=rand(80,400);
        $vuelo59->save();

        //-----------------------------

        
        $vuelo60=new Vuelo();
        $vuelo60->aeropuerto_origen="Istanbul Airport";
        $vuelo60->aeropuerto_destino="Fort Lauderdale–Hollywood International Airport";
        $vuelo60->cantidad_pasajeros=rand(0,200);
        $vuelo60->compañia="Air Europa";
        $vuelo60->fecha=Carbon::today()->addDays(rand(0, 180));
        $vuelo60->precio=rand(80,400);
        $vuelo60->save();
    }
}

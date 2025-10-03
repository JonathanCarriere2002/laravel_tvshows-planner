<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

/**
 * Seeder pour le modèle User permettant d'ajouter les vraies données de l'application dans la base de données
 * @author Jonathan Carrière
 */
class UsersSeeder
{
    public function run(): void
    {
        DB::table("users")->insert([
            ["name" => "Jonathan Carrière", "email" => "2030264@cegepoutaouais.qc.ca", "email_verified_at" => now(), "password" => bcrypt("!M=Q2+JiP+hJ"), "is_admin" => 1],
            ["name" => "Jonathan Carrière", "email" => "2052833@cegepoutaouais.qc.ca", "email_verified_at" => now(), "password" => bcrypt("Hpg%f+,yA8Cn"), "is_admin" => 1],
            ["name" => "ValérieLevasseurAdmin", "email" => "ValerieLevasseurAdmin@gmail.com", "email_verified_at" => now(), "password" => bcrypt("N4M1.xUh_Qis"), "is_admin" => 1],
            ["name" => "Cloud Strife", "email" => "cloud@gmail.com", "email_verified_at" => now(), "password" => bcrypt("1PWrf8TDf+bF"), "is_admin" => 0],
            ["name" => "Barret Wallace", "email" => "barret@gmail.com", "email_verified_at" => now(), "password" => bcrypt("+ygv4=RANotf"), "is_admin" => 0],
            ["name" => "Tifa Lockhart", "email" => "tifa@gmail.com", "email_verified_at" => now(), "password" => bcrypt("tC0o:8W?iPWB"), "is_admin" => 0],
            ["name" => "Aerith Gainsborough", "email" => "aerith@gmail.com", "email_verified_at" => now(), "password" => bcrypt("45Xh)>doknow"), "is_admin" => 0],
            ["name" => "Red XIII", "email" => "red@gmail.com", "email_verified_at" => now(), "password" => bcrypt("5,Gx=VKE.BK7"), "is_admin" => 0],
            ["name" => "Yuffie Kisaragi", "email" => "yuffie@gmail.com", "email_verified_at" => null, "password" => bcrypt(":ij1U*]*eas!"), "is_admin" => 0],
            ["name" => "Cait Sith", "email" => "cait@gmail.com", "email_verified_at" => now(), "password" => bcrypt("+-56f)K]YxF!"), "is_admin" => 0],
            ["name" => "Vincent Valentine", "email" => "vincent@gmail.com", "email_verified_at" => null, "password" => bcrypt("!uK!#9e*7#hk"), "is_admin" => 0],
            ["name" => "Cid Highwind", "email" => "cid@gmail.com", "email_verified_at" => now(), "password" => bcrypt("oQtR6L3%%Zw#"), "is_admin" => 0],
            ["name" => "ValérieLevasseurUser", "email" => "ValerieLevasseurUser@gmail.com", "email_verified_at" => now(), "password" => bcrypt("4H20%8Ksww%3"), "is_admin" => 0],
        ]);
    }
}

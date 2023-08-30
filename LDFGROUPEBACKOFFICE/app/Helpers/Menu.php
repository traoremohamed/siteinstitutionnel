<?php


namespace App\Helpers;

use App\Models\Logo;
use App\Models\Slide;
use App\Models\Article;
use App\Models\ProduitPhare;
use Illuminate\Support\Facades\DB;
use App\Models\Temoignange;

class Menu
{
    public static function get_menu($idutil)
    {


        $roles = DB::table('users')
            ->join('model_has_roles', 'users.id', 'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', 'roles.id')
            ->where([['users.id', '=', $idutil]])
            ->first();
        $idroles = $roles->role_id;

        $resulat = DB::table('role_has_sousmenus')
            ->join('sousmenu', 'role_has_sousmenus.sousmenus_id_sousmenu', 'sousmenu.id_sousmenu')
            ->join('roles', 'role_has_sousmenus.role_id', 'roles.id')
            ->join('menu', 'sousmenu.menu_id_menu', 'menu.id_menu')
            ->where([['roles.id', '=', $idroles]])
            ->orderBy('sousmenu.priorite_sousmenu', 'ASC')
            ->orderBy('menu.priorite_menu', 'ASC')
            ->get();

        $tabl = [];

        foreach ($resulat as $ligne) {

            $tabl[$ligne->id_menu][] = $ligne;
        }

        return (isset($tabl) ? $tabl : '');
    }

    public static function get_menu_profil($idutil)
    {


        $roles = DB::table('users')
            ->join('model_has_roles', 'users.id', 'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', 'roles.id')
            ->where([['users.id', '=', $idutil]])
            ->first();
        $idroles = $roles->role_id;
        //dd($idroles);

        $naroles = $roles->name;


        return (isset($naroles) ? $naroles : '');
    }

    public static function get_code_menu_profil($idutil)
    {


        $roles = DB::table('users')
            ->join('model_has_roles', 'users.id', 'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', 'roles.id')
            ->where([['users.id', '=', $idutil]])
            ->first();
        $idroles = $roles->role_id;
        //dd($idroles);

        $coderoles = $roles->code_roles;


        return (isset($coderoles) ? $coderoles : '');
    }

    public static function get_logo()
    {


        $logof = Logo::where([['flag_logo','=',true],['valeur','=','LOGO']])->first();


        return (isset($logof) ? $logof : '');
    }

    public static function get_info_acceuil()
    {


        $logof = Logo::where([['flag_logo','=',true],['valeur','=','IMAGE ACCEUIL']])->first();


        return (isset($logof) ? $logof : '');
    }

    public static function get_info_couleur()
    {


        $logof = Logo::where([['flag_logo','=',true],['valeur','=','COULEUR MENU HAUT']])->first();


        return (isset($logof) ? $logof : '');
    }

    public static function get_slide()
    {


        $logof  = Slide::where([['flag_slide','=',true]])->get();


        return (isset($logof) ? $logof : '');
    }

    public static function get_about()
    {


        $logof  = DB::table('article')->join('categorie_article','article.id_categ_article','categorie_article.id_cat_article')
                              ->where([['article.flag_article','=',true],['article.id_categ_article','=','2']])
                              ->first();


        return (isset($logof) ? $logof : '');
    }

    public static function get_actualite_limite()
    {


        $logof  = DB::table('actualite')->join('categorie_activite','actualite.id_cat','categorie_activite.id_categ')->where([['actualite.flag_actualite','=',true]])->orderBy('actualite.id_actualite', 'DESC')->limit(3)->get();


        return (isset($logof) ? $logof : '');
    }

    public static function get_stat()
    {


        $logof  = DB::table('statistique')->where([['statistique.flag_stat','=',true]])->orderBy('statistique.id_stat', 'DESC')->limit(4)->get();


        return (isset($logof) ? $logof : '');
    }

    public static function get_service()
    {


        $logof  = ProduitPhare::where([['flag_prod_ph','=',true]])->get();


        return (isset($logof) ? $logof : '');
    }

    public static function get_partenaire()
    {


        $logof  = DB::table('categorie_partenaire')
                              ->join('partenaire','categorie_partenaire.id_categorie','partenaire.id_categ')
                              ->where([['flag_part','=',true]])
                              ->get();


        return (isset($logof) ? $logof : '');
    }

    public static function get_temoignange()
    {


        $logof  = Temoignange::where([['flag_temoi','=',true]])->orderBy('id_temoi', 'DESC')->get();


        return (isset($logof) ? $logof : '');
    }

}

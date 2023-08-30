<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use App\Models\Article;
use App\Models\Banner;
use App\Models\GestionPage;
use App\Models\Help;
use App\Models\Logo;
use App\Models\Newsletter;
use App\Models\Partenaire;
use App\Models\Personnel;
use App\Models\Produit;
use App\Models\ProduitPhare;
use App\Models\Publicite;
use App\Models\Statistique;
use App\Models\Temoignange;
use DB;
use Illuminate\Http\Request;
use Log;
use App\Models\Slide;
use App\Models\Contact; 
use App\Models\Visite;
use App\Helpers\Email;
use App\Models\CountProduit;
use App\Mail\Message;
use Illuminate\Support\Facades\Mail;


class ApiController extends Controller
{
    public function getAllSlide(){
        $data = Slide::where([['flag_slide','=',true]])->get();

        return response()->json($data, 200);
    }

    public function getAllTemoignange(){
        $data = Temoignange::where([['flag_temoi','=',true]])->orderBy('id_temoi', 'DESC')->get();

        return response()->json($data, 200);
    }

    public function getAllActualite(){
        $data = DB::table('actualite')->join('categorie_activite','actualite.id_cat','categorie_activite.id_categ')->where([['actualite.flag_actualite','=',true]])->orderBy('actualite.id_actualite', 'DESC')->get();

        return response()->json($data, 200);
    }

    public function getAllActualitelimite(){
        $data = DB::table('actualite')->join('categorie_activite','actualite.id_cat','categorie_activite.id_categ')->where([['actualite.flag_actualite','=',true]])->orderBy('actualite.id_actualite', 'DESC')->limit(3)->get();

        return response()->json($data, 200);
    }

    public function getAllActualiteDetail($id = null){
        $data = DB::table('actualite')->join('categorie_activite','actualite.id_cat','categorie_activite.id_categ')
                    ->where([['actualite.flag_actualite','=',true],['actualite.id_actualite','=',$id]])
                    ->first();

        return response()->json($data, 200);
    }

    public function getAllProduitE(){
        $data = DB::table('produit')->join('categorie_produit','produit.id_cat_produit','categorie_produit.id_cat_prod')->where([['flag_produit','=',true],['id_cat_produit','=',2]])->get(); //Produit::where([['flag_produit','=',true]])->get();

        return response()->json($data, 200);
    }

    public function getAllProduitP(){
        $data = DB::table('produit')->join('categorie_produit','produit.id_cat_produit','categorie_produit.id_cat_prod')->where([['flag_produit','=',true],['id_cat_produit','=',1]])->get(); //Produit::where([['flag_produit','=',true]])->get();

        return response()->json($data, 200);
    }

    public function getAllProduitPhare(){
        $data = Produit::where([['flag_produit_phare','=',true]])->get();

        return response()->json($data, 200);
    }



    public function getAllMenufront(){

        /*$resulat = DB::table('menu_front')->join('sous_menu_front','sous_menu_front.menu_front_id_menu_front','menu_front.id_menu_front')->orderby('sous_menu_front.priorite_sous_menu_front')->get();*/
        $resulat1 = DB::table('menu_front')->orderby('menu_front.priorite_menu_front')->get();
        $resulat2 = DB::table('menu_front')->join('sous_menu_front','sous_menu_front.menu_front_id_menu_front','menu_front.id_menu_front')->orderby('sous_menu_front.priorite_sous_menu_front')->get();

        // dd($resulat);
        //return response()->json($resulat, 200);
        $data = [];

        foreach ($resulat1 as $ligne) {

            $data[$ligne->id_menu_front][] = $ligne;

        }

        foreach ($resulat2 as $ligne) {

            $data[$ligne->id_menu_front]['sous_menu'] []= $ligne;

        }




        return response()->json($data, 200);
    }

    public function getAllPartenaire(){
        $data = Partenaire::where([['flag_part','=',true]])->get();

        return response()->json($data, 200);
    }

   public function getAllListepartenaire($id=null){
        //$data = Partenaire::where([['flag_part','=',true]])->get();

        $pats = DB::table('categorie_partenaire')
            ->join('partenaire','categorie_partenaire.id_categorie','partenaire.id_categ')
            ->where([['flag_part','=',true],['id_categorie','=',$id]])
            ->get();



        return response()->json($pats, 200);
    }

    public function getAllCategoriepartenaire(){
        //$data = Partenaire::where([['flag_part','=',true]])->get();

        $pat = DB::table('categorie_partenaire')
            ->where([['flag_cat','=',true]])
            ->get();


        return response()->json($pat, 200);
    }

    public function getAllHelp(){
        $data = Help::where([['flag_help','=',true]])->get();

        return response()->json($data, 200);
    }

    public function getAllBanner(){
        $data = Banner::where([['flag_banner','=',true]])->first();

        return response()->json($data, 200);
    }

    public function getAllStatistique(){
        $data = Statistique::where([['flag_stat','=',true]])->get();

        return response()->json($data, 200);
    }

    public function getAllStatistique1(){
        $data = Statistique::where([['flag_stat','=',true],['id_stat','=',1]])->first();

        return response()->json($data, 200);
    }

    public function getAllStatistique2(){
        $data = Statistique::where([['flag_stat','=',true],['id_stat','=',2]])->first();

        return response()->json($data, 200);
    }

    public function getAllStatistique3(){
        $data = Statistique::where([['flag_stat','=',true],['id_stat','=',3]])->first();

        return response()->json($data, 200);
    }

    public function getAllStatistique4(){
        $data = Statistique::where([['flag_stat','=',true],['id_stat','=',4]])->first();

        return response()->json($data, 200);
    }

    public function getAllLogo(){
        $data = Logo::where([['flag_logo','=',true],['valeur','=','LOGO']])->first();

        return response()->json($data, 200);
    }

    public function getAllEmail(){
        $data = Logo::where([['flag_logo','=',true],['valeur','=','EMAIL']])->first();

        return response()->json($data, 200);
    }

    public function getAllContactgna(){
            $data = Logo::where([['flag_logo','=',true],['valeur','=','CONTACT']])->first();

            return response()->json($data, 200);
    }

    public function getAllReseaux(){
        $data = Logo::where([['flag_logo','=',true],['valeur','=','RESEAUX SOCIAUX']])->get();

        return response()->json($data, 200);
    }

    public function getAllEspaceClient(){
        $data = Logo::where([['flag_logo','=',true],['valeur','=','ESPACE CLIENT']])->first();

        return response()->json($data, 200);
    }


    public function getAllOuvrirCompte(){
        $data = Logo::where([['flag_logo','=',true],['valeur','=','OUVRIR COMPTE']])->first();

        return response()->json($data, 200);
    }

    public function getAllPersonnel(){
        $data = Personnel::where([['flag_personnel','=',true],['flag_actif_responsable','=',false]])->get();

        return response()->json($data, 200);
    }

    public function getAllPersonnelResp(){
        $data = Personnel::where([['flag_personnel','=',true],['flag_actif_responsable','=',true]])->first();

        return response()->json($data, 200);
    }

    public function getAllArticle(){
        $data = DB::table('article')->join('categorie_article','article.id_categ_article','categorie_article.id_cat_article')
                ->where([['article.flag_article','=',true],['article.id_categ_article','=','1']])
                ->get();

        return response()->json($data, 200);
    }

    public function getAllArticleMission(){
        $data = DB::table('article')->join('categorie_article','article.id_categ_article','categorie_article.id_cat_article')
            ->where([['article.flag_article','=',true],['article.id_categ_article','=','4']])
            ->first();

        return response()->json($data, 200);
    }

    public function getAllArticleValeur(){
        $data = DB::table('article')->join('categorie_article','article.id_categ_article','categorie_article.id_cat_article')
            ->where([['article.flag_article','=',true],['article.id_categ_article','=','5']])
            ->first();

        return response()->json($data, 200);
    }

    public function getAllArticleVision(){
        $data = DB::table('article')->join('categorie_article','article.id_categ_article','categorie_article.id_cat_article')
            ->where([['article.flag_article','=',true],['article.id_categ_article','=','6']])
            ->first();

        return response()->json($data, 200);
    }

    public function getAllArticlePolitiqueQualite(){
        $data = DB::table('article')->join('categorie_article','article.id_categ_article','categorie_article.id_cat_article')
            ->where([['article.flag_article','=',true],['article.id_categ_article','=','7']])
            ->first();

        return response()->json($data, 200);
    }

     public function getAllArticlePlanSite(){
            $data = DB::table('article')->join('categorie_article','article.id_categ_article','categorie_article.id_cat_article')
                ->where([['article.flag_article','=',true],['article.id_categ_article','=','8']])
                ->first();

            return response()->json($data, 200);
        }

     public function getAllArticlePolitiqueConfidentilite(){
            $data = DB::table('article')->join('categorie_article','article.id_categ_article','categorie_article.id_cat_article')
                    ->where([['article.flag_article','=',true],['article.id_categ_article','=','9']])
                    ->first();

            return response()->json($data, 200);
         }

     public function getAllArticleMentionLegale(){
           $data = DB::table('article')->join('categorie_article','article.id_categ_article','categorie_article.id_cat_article')
                        ->where([['article.flag_article','=',true],['article.id_categ_article','=','10']])
                        ->first();

           return response()->json($data, 200);
         }

    public function getAllArticleapropos(){
        $data = DB::table('article')->join('categorie_article','article.id_categ_article','categorie_article.id_cat_article')
            ->where([['article.flag_article','=',true],['article.id_categ_article','=','2']])
            ->orderBy('article.created_at','DESC')
            ->first();

        return response()->json($data, 200);
    }

    public function getAllArticlesujet(){
        $data = DB::table('article')->join('categorie_article','article.id_categ_article','categorie_article.id_cat_article')
            ->where([['article.flag_article','=',true],['article.id_categ_article','=','3']])
            ->orderBy('article.created_at','DESC')
            ->first();

        return response()->json($data, 200);
    }

    public function getAllAgence(){
        $data = Agence::where([['flag_agence','=',true],['flag_affcher_liste','=',true]])->orderBy('ordre_agence', 'ASC')->get();

        return response()->json($data, 200);
    }

    public function getAllAgenceNon(){
        $data = DB::select(
            DB::raw(
                "
                select ag.lat_agence as lat, ag.long_agence as log, CONCAT_WS(' - ',ag.type_agence,ag.nom_agence) as title, ag.contact_tel_agence as contact, ag.nom_agence as libAgence, ag.contact_mail_agence as email,
	        ag.responsable_agence as responsable,  ag.flag_agence
           	from agence ag where ag.flag_agence = true;
                "
            ),
        );

        return response()->json($data, 200);
    }


    public function contact(request $request){

 if ($request->isMethod('post')) {

        $data = $request->all();

        if(isset($data['email_contact'])){

            EMAIL::get_envoimail_gna_assurance_assistance($data['email_contact'], $data['nom_prenom_contact'], $data['message_contact'], $data['sujet_contact'], $data['contact_contact']);
        }

        Contact::create(
            array(
                'nom_prenom_contact' => $data['nom_prenom_contact'],
                'email_contact' => $data['email_contact'],
                'contact_contact' => $data['contact_contact'],
                'sujet_contact' => $data['sujet_contact'],
                'message_contact' => $data['message_contact']
            )
        );

        //$email = "traoremohamed2g@gmail.com";



        return response()->json(array('success'=>true,'message'=>'Message envoyé avec succès'));
}else{
            return response()->json(array('errors'=>true,'message'=>'Message envoyé avec succès'));
        }
    }

    public function visite(request $request){

 if ($request->isMethod('post')) {

        $data = $request->all();

        Visite::create(
            array(
                'ip_visite' => $data['ip_adresse']            )
        );

       


        return response()->json(array('success'=>true,'message'=>'Message envoyé avec succès'));
}else{
            return response()->json(array('errors'=>true,'message'=>'erreur'));
        }
    }


    public function newsletter(request $request){

	/*$this->validate($request, [
            'email_new' => 'required|email',
        ]);*/

        //$data = $request->all();

         /*Mail::to("doezekiel@gmail.com")->bcc("traoremohamed2g@gmail.com")
                  ->queue(new Message($data['email_new']));*/

         /*if(isset($data['email_new'])){
            EMAIL::get_envoimail_gna_assurance_newletter($data['email_new']);
          }

        Newsletter::create(
            array(
                'email_new' => $data['email_new']
            )
        );



        return response()->json(array('success'=>true,'message'=>'Message envoyé avec succès'));*/

        $request->validate([
            'email_new' => 'required|email'
        ]);
         /*Mail::to("doezekiel@gmail.com")->bcc("traoremohamed2g@gmail.com")
                  ->queue(new Message($data['email_new']));*/
        if ($request->isMethod('post')) {
            $data = $request->all();
         if(isset($data['email_new'])){
            EMAIL::get_envoimail_gna_assurance_newletter($data['email_new']);
          }

        Newsletter::create(
            array(
                'email_new' => $data['email_new']
            )
        );
            return response()->json(array('success'=>true,'message'=>'Message envoyé avec succès'));
        }else{
            return response()->json(array('errors'=>true,'message'=>'Message envoyé avec succès'));
        }
    }

    public function getAllBannerParticulier(){
        $data = GestionPage::where([['nom_tech_gest_page','=','particulier'],['flag_gest_page','=',true]])->first();

        return response()->json($data, 200);
    }

    public function getAllBannerEntreprise(){
        $data = GestionPage::where([['nom_tech_gest_page','=','entreprise'],['flag_gest_page','=',true]])->first();

        return response()->json($data, 200);
    }

    public function getAllBannerActualite(){
        $data = GestionPage::where([['nom_tech_gest_page','=','actualite'],['flag_gest_page','=',true]])->first();

        return response()->json($data, 200);
    }

    public function getAllBannerMetier(){
        $data = GestionPage::where([['nom_tech_gest_page','=','metier'],['flag_gest_page','=',true]])->first();

        return response()->json($data, 200);
    }

    public function getAllBannerContact(){
        $data = GestionPage::where([['nom_tech_gest_page','=','contact'],['flag_gest_page','=',true]])->first();

        return response()->json($data, 200);
    }

    public function getAllvaleurMap(){
        $data = DB::select(
            DB::raw(
                "
                select ag.lat_agence as lat, ag.long_agence as log, CONCAT_WS(' - ',ag.type_agence,ag.nom_agence) as title, ag.contact_tel_agence as contact, ag.nom_agence as libAgence, ag.contact_mail_agence as email,
	        ag.responsable_agence as responsable,  ag.flag_agence, ag.flag_affcher_map
		from agence ag where ag.flag_agence = true and ag.flag_affcher_map = true;
                "
            ),
        );

            //GestionPage::where([['nom_tech_gest_page','=','contact'],['flag_gest_page','=',true]])->first();

        return response()->json($data, 200);
    }

    public function getAllPublicite(){
        $data = Publicite::where([['flag_pub','=',true]])->first();

        return response()->json($data, 200);
    }

     public function countproduit(request $request){

            $data = $request->all();

            CountProduit::create(
                array(
                    'id_prod' => $data['id_prod'],
                    'count_click' => $data['count_click']
                )
            );

            return response()->json(array('success'=>true,'message'=>'Message envoyé avec succès'));
        }

    public  function  getAllPcagna(){

        $data = Article::where([['id_categ_article','=','12'],['flag_article','=',true]])->first();

        return response()->json($data, 200);
    }

    public  function  getAllPersonnels(){

        $data = Article::where([['id_categ_article','=','13'],['flag_article','=',true]])->first();

        return response()->json($data, 200);
    }

 public function getAllPartenaires(){
          //$data = Partenaire::where([['flag_part','=',true]])->get();

        /*$pat = DB::table('categorie_partenaire')
            ->join('partenaire','categorie_partenaire.id_categorie','partenaire.id_categ')
            ->where([['flag_part','=',true]])
            ->get();

        $data = [];

        foreach ($pat as $ligne) {

            $data[$ligne->id_categorie]['categorie'] = $ligne;
            $data[$ligne->id_categorie]['detail'][] = $ligne;
        }

        return response()->json($data, 200);*/

$pat = DB::table('categorie_partenaire')
            ->join('partenaire','categorie_partenaire.id_categorie','partenaire.id_categ')
            ->where([['flag_part','=',true]])
            ->get();

        $data = [];

        foreach ($pat as $ligne) {

            $data[$ligne->id_categorie]['categorie'] = $ligne;
            $data[$ligne->id_categorie]['detail'][] = $ligne;
        }

        $table=[];
        foreach ($data as $ligne  ) {
            $table[]  = $ligne ;

        }

        return response()->json($table, 200);
    }

  public function getAllVideo(){
        $data = Article::where([['id_categ_article','=','15'],['flag_article','=',true]])->get();

        return response()->json($data, 200);
    }

    public function getRecherche(){

        $data = DB::select(
            DB::raw(
                "
                SELECT * FROM  vue_recherche_bon
                "
            ),
        );

        return response()->json($data, 200);
    }

}

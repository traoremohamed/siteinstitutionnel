@extends('layouts.backLayout.designadmin')


@section('content')

@php($Module='Parametre')
@php($titre='Liste des actualites')
@php($soustitre='Modifier actualite')


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">{{$soustitre}}</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a class="text-muted">{{$Module}}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-muted">{{$titre}}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-muted">{{$soustitre}}</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

        </div>
    </div>

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">


            @if ($errors->any())

            <div class="alert alert-custom alert-danger fade show" role="alert">
                <div class="alert-text">
                    <strong>Echec :</strong> Veuillez renseigner les informations du formulaire !</div>
                <div class="alert-close">
                    <button type="button" class="btn-sx close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
            @endif

            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom" style="width: 100%">
                <div class="card-header">
                    <div class="card-title">
											<span class="card-icon">
												<i class="flaticon2-favourite text-primary"></i>
											</span>
                        <h3 class="card-label">{{$soustitre}}</h3>
                    </div>

								<div class="card-toolbar">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2">
                            <button type="button" class="btn btn-sm btn-light-primary font-weight-bolder dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-download"></i>Exporter
                            </button>
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <ul class="nav flex-column nav-hover">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon la la-print"></i>
                                            <span class="nav-text">Imprimer</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon la la-file-text-o"></i>
                                            <span class="nav-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon la la-file-pdf-o"></i>
                                            <span class="nav-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <!--end::Dropdown-->
                        <!--begin::Button-->
                                                        @can('active-desative-actualite')

                                                        <?php if($actualite->flag_actualite == 1){ ?>

                                                            <label class="label label-lg label-warning label-inline"><a href="{{ route('desactiveactualite',\App\Helpers\Crypt::UrlCrypt($actualite->id_actualite)) }}"> Desactiver </a></label>

                                                        <?php }else{ ?>

                                                            <label class="label label-lg label-success label-inline"><a href="{{ route('activeactualite',\App\Helpers\Crypt::UrlCrypt($actualite->id_actualite)) }}"> Active </a></label>

                                                        <?php }  ?>
                                                        @endcan
                        <!--end::Button-->
                    </div>
                </div>
                <form  action="{{ route('modifieractualite',\App\Helpers\Crypt::UrlCrypt($id))}}" method="post"  enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                    <div class="form-group row">

                        <div class="col-lg-6">
                            <label></label>
                            <select
                                class="form-control "
                                name="id_cat" id="kt_select2_2"/>

                            <?php echo $categoriesact; ?>

                            </select>

                        </div>

                        <div class="col-lg-6">
                            <label>Titre service:</label>
                            <input class="form-control" type="text" name="titre_actualite" value="{{$actualite->titre_actualite}}" >
                            <span class="form-text text-muted">  </span>
                        </div>

                        <div class="col-lg-6">
                            <label>Lien de l'article:</label>
                            <input type="text" class="form-control" placeholder="Lien article" name="lien_text_actu" value="{{$actualite->lien_text_actu}}" />

                        </div>

                        <div class="col-lg-6">
                            <label>Date de publication:</label>
                            <input type="date" class="form-control" placeholder="Date de publication" name="date_pub_actu" value="{{$actualite->date_pub_actu}}" />

                        </div>

                        <div class="col-lg-6">
                            <label>Description:</label>
                            <textarea class="summernote" id="description_actualite" name="description_actualite" rows="6">{{$actualite->description_actualite}}</textarea>

                        </div>

                        <div class="col-lg-6">
                            <label>Image actualite(taille 372 × 300 px):</label>
                            <input type="file" class="form-control" placeholder="ajouter un  fichier" name="image_actualite"  />


                            <span class="form-text text-muted">  </span>
                        </div>

 


                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-6">
                            <a class="btn btn-sm btn-secondary" href="{{ route('actualite') }}"> Retour</a>
                        </div>
                        <div class="col-lg-6 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">Modifier</button>
                        </div>
                    </div>
                </div>

                </form>
            </div>


            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>



@endsection

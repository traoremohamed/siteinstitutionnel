@extends('layouts.backLayout.designadmin')


@section('content')

@php($Module='Parametre')
@php($titre='Liste des agences')
@php($soustitre='Modifier agence')


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
                                              @can('active-desative-agence')

                                                                            <?php if($agence->flag_agence == 1){ ?>

                                                                                <label class="label label-lg label-warning label-inline"><a href="{{ route('desactiveagences',\App\Helpers\Crypt::UrlCrypt($agence->id_agence)) }}"> Desactiver </a></label>

                                                                            <?php }else{ ?>

                                                                                <label class="label label-lg label-success label-inline"><a href="{{ route('activeagences',\App\Helpers\Crypt::UrlCrypt($agence->id_agence)) }}"> Active </a></label>

                                                                            <?php }  ?>


                                                                            @endcan
                                            <!--end::Button-->
                                        </div>
                </div>
                <form  action="{{ route('modifieragences',\App\Helpers\Crypt::UrlCrypt($id))}}" method="post"  enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                    <div class="form-group row">

                        <div class="col-lg-6">
                            <label>Categorie agence:</label>
                            <select class="form-control "
                                    name="type_agence" id="kt_select2_2" >
                                <option value="<?php $agence->type_agence ?>">{{$agence->type_agence}}</option>
                                <option value="DELEGATIONS REGIONALES">DELEGATIONS REGIONALES</option>
                                <option value="BUREAUX DIRECTS">BUREAUX DIRECTS</option>
                                <option value="SIEGE">SIEGE</option>
                            </select>

                        </div>

                        <div class="col-lg-6">
                            <label>Nom de l'agence:</label>
                            <input type="text" class="form-control" placeholder="Nom de agence" name="nom_agence" value="{{$agence->nom_agence}}"  />

                        </div>
				<div class="col-lg-6">
                            <label>Nom et prenom du responsable:</label>
                            <input type="text" class="form-control" placeholder="Nom et prenom du responsable" name="responsable_agence" value="{{$agence->responsable_agence}}" />

                        </div>

                        <div class="col-lg-6">
                            <label>Contact tel agence:</label>
                            <input type="text" class="form-control" placeholder="Contact tel agence" name="contact_tel_agence" value="{{$agence->contact_tel_agence}}" />

                        </div>

                        <div class="col-lg-6">
                            <label>Contact email agence:</label>
                            <input type="text" class="form-control" placeholder="Contact email agence" name="contact_mail_agence" value="{{$agence->contact_mail_agence}}" />

                        </div>

                        <div class="col-lg-6">
                            <label>Latitude agence:</label>
                            <input type="text" class="form-control" placeholder="Latitude agence" name="lat_agence" value="{{$agence->lat_agence}}" />

                        </div>

                        <div class="col-lg-6">
                            <label>Longitude agence:</label>
                            <input type="text" class="form-control" placeholder="Longitude agence" name="long_agence" value="{{$agence->long_agence}}" />

                        </div>
                                                <div class="col-lg-6">
                                                    <label>Ordre:</label>
                                                    <input type="number" class="form-control" placeholder="ordre d'affichage" name="ordre_agence" value="{{$agence->ordre_agence}}"/>
                                                </div>

                         <div class="col-lg-6">
                                                    <label>Image agence:</label>
                                                    <input type="file" class="form-control" placeholder="ajouter un  fichier" name="image_agence"  />


                                                    <span class="form-text text-muted">  </span>
                                                </div>
<div class="col-lg-3">
                            <label>Afficher dans  le map:</label>
                            <input type="checkbox" class="form-control"  name="flag_affcher_map" <?php if($agence->flag_affcher_map == 1){ ?> checked <?php } ?>>
                        </div>
                        <div class="col-lg-3">
                            <label>Afficher dans la liste:</label>
                            <input type="checkbox" class="form-control"  name="flag_affcher_liste" <?php if($agence->flag_affcher_liste == 1){ ?> checked <?php } ?>>
                        </div>
                        <div class="col-lg-6">
                            <label>Inforamtion complementaire:</label>
                            <textarea class="summernote" id="info_compl_agence" name="info_compl_agence" rows="6">{{$agence->info_compl_agence}}</textarea>

                        </div>
 
                                                <div class="col-lg-6">
                                                <label>Image</label><br>
                                                    @if(!empty($agence->image_agence))

                                                                                    <img src="{{ asset('/frontend/agence/'. $agence->image_agence)}}" width="100%" heigth="50%" alt="">

                                                                                  @endif
                                                                        </div>









                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-6">
                            <a class="btn btn-sm btn-secondary" href="{{ route('agences') }}"> Retour</a>
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

@extends('layouts.backLayout.designadmin')


@section('content')

@php($Module='Parametre')
@php($titre='Liste des slides')
@php($soustitre='Ajouter actualite')


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
                </div>
                {!! Form::open(array('route' => 'creationactualite','method'=>'POST','enctype'=>'multipart/form-data')) !!}
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
                            <label>Titre:</label>
                            {!! Form::text('titre_actualite', null, array('placeholder' => 'Titre ','class' => 'form-control')) !!}

                            <span class="form-text text-muted">  </span>
                        </div>

                        <div class="col-lg-6">
                            <label>Lien de l'article:</label>
                            <input type="text" class="form-control" placeholder="Lien article" name="lien_text_actu"  />

                        </div>

                        <div class="col-lg-6">
                            <label>Date de publication:</label>
                            <input type="date" class="form-control" placeholder="Date de publication" name="date_pub_actu"  />

                        </div>

                        <div class="col-lg-6">
                            <label>Description:</label>
                            <textarea class="summernote" id="description_actualite" name="description_actualite" rows="6"></textarea>

                        </div>
                        <div class="col-lg-6">
                            <label>Image actualite( taille 372 × 300 px):</label>
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
                            <input name="action" type="submit"  class="btn btn-sm btn-primary" value="Enregister"/>

                            @can('enregistrer-valider')

                            <input name="action" type="submit"  class="btn btn-sm btn-success" value="Enregister et activé"/>

                            @endcan
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
{!! Form::close() !!}


@endsection

<?php
use App\Helpers\Menu;
$infosa = Menu::get_info_acceuil();
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4">
            <!--begin::Stats Widget 29-->
            <div class="card card-custom bgi-no-repeat card-stretch gutter-b"
                 style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
                <!--begin::Body-->
                <div class="card-body">
												<span class="svg-icon svg-icon-danger svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\User.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path
            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path
            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
            fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>
                    <span
                        class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">{{$countUser}} </span>
                    <span class="font-weight-bold text-muted font-size-sm">Nombre total  d'utilisateur</span>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Stats Widget 29-->
        </div>
        <div class="col-xl-4">
            <!--begin::Stats Widget 30-->
            <div class="card card-custom bg-info card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body">
												<span class="svg-icon svg-icon-2x svg-icon-white">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink">
															<!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->

															<defs></defs>
															<g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z"
            fill="#000000"/>
    </g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
                    <span
                        class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block"> {{$countproduit}}</span>
                    <span class="font-weight-bold text-white font-size-sm">Nombre total des clicks produits</span>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Stats Widget 30-->
        </div>
        <div class="col-xl-4">
            <!--begin::Stats Widget 31-->
            <div class="card card-custom bg-danger card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body">
												<span class="svg-icon svg-icon-2x svg-icon-white">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
												<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
												<!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->

												<defs></defs>
												<g id="Stockholm-icons-/-Shopping-/-Box1" stroke="none" stroke-width="1"
                                                   fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24"></rect>
													<polygon id="Rectangle" fill="#000000" opacity="0.3"
                                                             points="6 3 18 3 20 6.5 4 6.5"></polygon>
													<path
                                                        d="M6,5 L18,5 C19.1045695,5 20,5.8954305 20,7 L20,19 C20,20.1045695 19.1045695,21 18,21 L6,21 C4.8954305,21 4,20.1045695 4,19 L4,7 C4,5.8954305 4.8954305,5 6,5 Z M9,9 C8.44771525,9 8,9.44771525 8,10 C8,10.5522847 8.44771525,11 9,11 L15,11 C15.5522847,11 16,10.5522847 16,10 C16,9.44771525 15.5522847,9 15,9 L9,9 Z"
                                                        id="Combined-Shape" fill="#000000"></path>
												</g>
											</svg>
                                                    <!--end::Svg Icon-->
												</span>
                    <span
                        class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block"> {{$countvisiteur}} </span>
                    <span class="font-weight-bold text-white font-size-sm">Nombre total de visiteur</span>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Stats Widget 31-->
        </div>
    </div>
    <div class="row">

        <div align="center" class="col-lg-6">

            <div class="card card-custom card-stretch gutter-b">

                <!--begin::Body-->
                <div class="card-body pt-0 pb-3">
                    <div class="tab-content">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <img
                                class="content-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center "
                                align="center" width="100%"
                                src="{{ asset('/frontend/logo/'. $infosa->logo_logo)}}">


                        </div>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Body-->
            </div>

        </div>
        <div class="col-lg-6">


            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Liste des utilisateurs</span>
                        <span
                            class="text-muted mt-3 font-weight-bold font-size-sm">Utilisateurs de victoire immobilier</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary font-weight-bolder">
                            <i class="la la-plus"></i>Ajouter un utilisateur</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0 pb-3">
                    <div class="tab-content">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-checkable" id="kt_datatable"
                                   style="margin-top: 13px !important">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Noms et prenoms</th>
                                    <th>Email</th>
                                    <th>Profil</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($dataUser as $key => $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name. '  '.$user->prenom_users }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if(!empty($user->getRoleNames()))
                                                @foreach($user->getRoleNames() as $v)
                                                    <label class="badge badge-success">{{ $v }}</label>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td align="center">
                                            @can('role-edit')
                                                <a href="{{ route('users.edit',$user->id) }}"
                                                   class="btn btn-warning btn-xs btn-clean btn-icon"
                                                   title="Modifier"> <i class="la la-edit"></i> </a>

                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Body-->
            </div>


        </div>
    </div>
</div>

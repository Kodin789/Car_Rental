<x-app-layout>


        <!-- END: Top Bar -->
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">Brands</h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button class="btn btn-primary shadow-md mr-2">Car Brand</button>
                <div class="dropdown ml-auto sm:ml-0">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="w-5 h-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-lucide="plus"></i>
                        </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="#" class="dropdown-item">
                                    <i data-lucide="share-2" class="w-4 h-4 mr-2"></i> Share
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">
                                    <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
            <div class="box p-5 pl-3 intro-y">
                <div class="body d-flex py-3">
                    <div class="container-xxl">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body text-danger">

                                        <x-auth-session-status class="mb-4" :status="session('status')" />
                                        <form action="{{ route('car.view') }} " method="post"
                                        enctype="multipart/form-data">@csrf
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control">

                                            <label for="">image</label>
                                            <input type="file" name="image" class="form-control">
                                            <button class="btn btn-primary mt-4">Add Brand</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





</x-app-layout>


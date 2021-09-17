<x-app-layout>

    <!-- Breadcrumb -->
    <div class="breadcrumbs overlay" style="background-image:url('../images/breadcrumb-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>Perfil de usuario</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="bread-list">
                        <li><a href="/">Inicio<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a>Perfil</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Breadcrumb -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    {{-- <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div> --}}

    <div class="flex flex-wrap" id="tabs-id">
        <div class="w-full">
          <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
              <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-teal-600 bg-white" onclick="changeAtiveTab(event,'tab-profile')">
                <i class="fa fa-user text-base mr-1"></i>  Perfil
              </a>
            </li>
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
              <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-teal-600 bg-white" onclick="changeAtiveTab(event,'tab-password')">
                <i class="fa fa-key text-base mr-1"></i>  Contraseña
              </a>
            </li>           
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
              <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-teal-600 bg-white" onclick="changeAtiveTab(event,'tab-authentication')">
                <i class="fa fa-unlock-alt text-base mr-1"></i>  Autenticación
              </a>
            </li>
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-teal-600 bg-white" onclick="changeAtiveTab(event,'tab-session')">
                  <i class="fa fa-shield text-base mr-1"></i>  Sesiones
                </a>
            </li>
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-teal-600 bg-white" onclick="changeAtiveTab(event,'tab-request')">
                  <i class="fa fa-paper-plane-o text-base mr-1"></i>  Solicitar Rol
                </a>
              </li>
          </ul>
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
            <div class="px-4 py-5 flex-auto">
              <div class="tab-content tab-space">
                <div class="block" id="tab-profile">
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')

                    <x-jet-section-border />
                    @endif
                </div>
                <div class="hidden" id="tab-password">
                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>    
                    <x-jet-section-border />
                    @endif
                </div>
                <div class="hidden" id="tab-authentication">
                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.two-factor-authentication-form')
                    </div>    
                    <x-jet-section-border />
                    @endif
                </div>
                <div class="hidden" id="tab-session">
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.logout-other-browser-sessions-form')
                    </div>
                </div>
                <div class="hidden" id="tab-request">
                    <div class="mt-10 sm:mt-0">
                        @livewire('request-role')
                    </div>
                  </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        function changeAtiveTab(event,tabID){
          let element = event.target;
          while(element.nodeName !== "A"){
            element = element.parentNode;
          }
          ulElement = element.parentNode.parentNode;
          aElements = ulElement.querySelectorAll("li > a");
          tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
          for(let i = 0 ; i < aElements.length; i++){
            aElements[i].classList.remove("text-white");
            aElements[i].classList.remove("bg-green-500");
            aElements[i].classList.add("text-green-500");
            aElements[i].classList.add("bg-white");
            tabContents[i].classList.add("hidden");
            tabContents[i].classList.remove("block");
          }
          element.classList.remove("text-green-500");
          element.classList.remove("bg-white");
          element.classList.add("text-white");
          element.classList.add("bg-green-500");
          document.getElementById(tabID).classList.remove("hidden");
          document.getElementById(tabID).classList.add("block");
        }
      </script>
</x-app-layout>

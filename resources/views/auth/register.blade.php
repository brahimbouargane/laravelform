@extends('layouts.app')

@section('content')
<div class="flex justify-center">
   <div class="w-10/12  bg-white p-6 rounded-lg font-bold text-xl">
    <h2 class="text-indigo-600 mb-3 text-center">FORMULAIRE CANDIDAT</h2>
      <div class="mt-5 md:col-span-2 md:mt-0">
      <form action="{{ route('register')}}" method="post">
        @csrf
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="bg-white px-4 py-5 sm:p-6">
            <div class="grid grid-cols-6 gap-6">

              <div class="col-span-6 md:col-span-2 sm:col-span-3 ">
                <label for="typeFormation" class="block text-sm font-medium text-gray-700">type formarion</label>
                <select id="typeFormation" name="typeFormation"  class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                  <option value="" disabled="" selected="">Type formation</option>
                  <option value="Formation résidentielle">Formation résidentielle</option>
                  <option value="Formation alterné">Formation alterné</option>
                  <option value="Formation par apprentissage">Formation par apprentissage</option>
                  <option value="Formation continue">Formation continue</option>
                </select>
                @error('typeFormation')
                    <div class="text-red-500 mt-2 text-sm">
                      {{$message}}
                    </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-3 ">
                <label for="sectionCondidat" class="block text-sm font-medium text-gray-700">section condidat</label>
                <select id="sectionCondidat" name="sectionCondidat"  class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                  <option value="" disabled="" selected="">Sections Candidat</option>
                  <option value="Lycéen">Lycéen</option>
                  <option value="Professionnel">Professionnel</option>
                  <option value="Autre">Autre</option>
                </select>
                @error('sectionCondidat')
                    <div class="text-red-500 mt-2 text-sm">
                      {{$message}}
                    </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-3 ">
                <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" name="name" id="name" placeholder="Nome" autocomplete="given-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
               
                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                  {{$message}}
                </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-3 ">
                <label for="prenom" class="block text-sm font-medium text-gray-700">Prenom</label>
                <input type="text" name="prenom" id="prenom" placeholder="prenom"  class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                @error('prenom')
                <div class="text-red-500 mt-2 text-sm">
                  {{$message}}
                </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-3 ">
                <label for="genre" class="block text-sm font-medium text-gray-700">Genre</label>
                <select id="genre" name="genre" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                  <option value="" disabled="" selected="">Genre</option>
                  <option value="Masculin">Masculin</option>
                  <option value="Feminin">Feminin</option>
                </select>
                @error('genre')
                <div class="text-red-500 mt-2 text-sm">
                  {{$message}}
                </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-3 ">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" placeholder="example@gmail.com"  class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                  {{$message}}
                </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-3 ">
                <label for="phoneNb" class="block text-sm font-medium text-gray-700">numero de telephone</label>
                <input type="number" name="phoneNb" id="phoneNb" placeholder="Nome"  class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                @error('phoneNb')
                <div class="text-red-500 mt-2 text-sm">
                  {{$message}}
                </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-3 ">
                <label for="birthDate" class="block text-sm font-medium text-gray-700">Date de naissance</label>
                <input type="date" name="birthDate" id="birthDate" placeholder=""  class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                @error('birthDate')
                <div class="text-red-500 mt-2 text-sm">
                  {{$message}}
                </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-3 ">
                <label for="birthPlace" class="block text-sm font-medium text-gray-700">Lieu de naissance</label>
                <input type="text" name="birthPlace" id="birthPlace" placeholder=""  class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                @error('BirthPlace')
                <div class="text-red-500 mt-2 text-sm">
                  {{$message}}
                </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-3 ">
                <label for="cin" class="block text-sm font-medium text-gray-700">CIN</label>
                <input type="text" name="cin" id="cin" placeholder=""  class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                @error('cin')
                <div class="text-red-500 mt-2 text-sm">
                  {{$message}}
                </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-3 ">
                <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse</label>
                <textarea type="text" name="adresse" id="adresse" placeholder=""  class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"></textarea>
                @error('adresse')
                <div class="text-red-500 mt-2 text-sm">
                  {{$message}}
                </div>
                @enderror
              </div>
              
              <div class="col-span-6 md:col-span-2 sm:col-span-3 ">
                <label for="region" class="block text-sm font-medium text-gray-700">Region</label>
                <select id="region" name="region"  class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                  <option value="" disabled="" selected="">Region</option>
                  <option value="Tanger-Tétouan-Al Hoceïma">Tanger-Tétouan-Al Hoceïma</option>
                  <option value="l'Oriental">l'Oriental</option>
                  <option value="Fès-Meknès">Fès-Meknès</option>
                  <option value="Béni Mellal-Khénifra">Béni Mellal-Khénifra</option>
                  <option value="Casablanca-Settat">Casablanca-Settat</option>
                  <option value="Marrakech-Saf">Marrakech-Safi</option>
                  <option value="Drâa-Tafilalet">Drâa-Tafilalet</option>
                  <option value="Souss-Massa">Souss-Massa</option>
                  <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
                  <option value="Laâyoune-Sakia El Hamra">Laâyoune-Sakia El Hamra</option>
                  <option value="Dakhla-Oued Ed Dahab">Dakhla-Oued Ed Dahab</option>
                </select>
                @error('region')
                <div class="text-red-500 mt-2 text-sm">
                  {{$message}}
                </div>
                @enderror
              </div>

              <div class="col-span-6 md:col-span-2 sm:col-span-3 ">
                <label for="ville" class="block text-sm font-medium text-gray-700">Ville</label>
                <select id="ville" name="ville"  class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                  <option value="" disabled="" selected="">Ville</option>
                  <option value="Tanger">Tanger</option>
                  <option value="Meknès">Meknès</option>
                  <option value="Fès">Fès</option>
                  <option value="Béni Mellal">Béni Mellal</option>
                  <option value="Casablanca-Settat">Casablanca-Settat</option>
                  <option value="Marrakech-Safi">Marrakech-Safi</option>
                  <option value="Drâa-Tafilalet">Drâa-Tafilalet</option>
                  <option value="Souss-Massa">Souss-Massa</option>
                  <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
                  <option value="Laâyoune-Sakia El Hamra">Laâyoune-Sakia El Hamra</option>
                  <option value="Dakhla-Oued Ed Dahab">Dakhla-Oued Ed Dahab</option>
                </select>
                @error('ville')
                <div class="text-red-500 mt-2 text-sm">
                  {{$message}}
                </div>
                @enderror
              </div>
            </div>
            <div class="mt-3">
              <label class="block text-sm font-medium text-gray-700">Téléchargement des pièces à scanner</label>
              <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="fileUpload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                      <span>Upload a file</span>
                      <input id="fileUpload" name="fileUpload" type="file" class="sr-only">
                    </label>
                    <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                </div>
              </div>
            </div>
            @error('fileUpload')
            <div class="text-red-500 mt-2 text-sm">
              {{$message}}
            </div>
            @enderror
            <div class="mt-4">
              <label class="block text-sm font-medium text-gray-700">Conditions particulières d'utilisation *</label>
              <div class="col-span-6 sm:col-span-6 flex items-center mt-3">
                <input id="defaultcheckbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="defaultcheckbox" class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-700">Je déclare sur l'honneur que les informations indiquées dans ce formulaire de candidature sont, à ma connaissance, authentiques, complètes et exactes.</label>
              </div>
            </div>
          </div>
          
         
          <div class=" px-4 py-3  sm:px-6">
            <button type="submit" class="w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Envoyer</button>
          </div>
          </div>
        </div>
      </form>
    </div>
   </div>
</div>
@endsection
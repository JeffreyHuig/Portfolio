<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Curriculum Vitae') }}
        </h2>
    </x-slot>

    <div class="flex-col border-2 border-gray-900/10 rounded-lg bg-white py-4 px-6 w-4/5 flex mb-8 mt-4 mx-auto">
        <p class="font-bold text-2xl text-blue-900">Curriculum Vitae</p>

        <div class="grid grid-cols-2 col-span-4 gap-x-0 gap-y-1 w-2/5 my-2">
            <p class="font-medium text-lg text-blue-900">Persoonsgegevens:</p>
            <div class="grid grid-cols-2 col-span-4">
                <p class="font-bold">Naam:</p>
                <p>Jeffrey Huig</p>
            </div>
            <div class="grid grid-cols-2 col-span-4">
                <p class="font-bold">Adres:</p>
                <p>Sportlaan 27</p>
            </div>
            <div class="grid grid-cols-1 col-span-2 col-start-2">
                <p>1782 NB, Den Helder</p>
            </div>
            <div class="grid grid-cols-2 col-span-4">
                <p class="font-bold">Telefoon:</p>
                <p class="bg-current">06-39040010</p>
            </div>
            <div class="grid grid-cols-2 col-span-4">
                <p class="font-bold">E-mail:</p>
                <p class="bg-current">jaj.huig@hotmail.com</p>
            </div>
            <div class="grid grid-cols-2 col-span-4">
                <p class="font-bold">Nationaliteit:</p>
                <p>Nederlands</p>
            </div>
            <div class="grid grid-cols-2 col-span-4">
                <p class="font-bold">Geboortedatum:</p>
                <p>24-02-2000</p>
            </div>
        </div>

        <div class="my-2">
            <p class="font-medium text-lg text-blue-900">Profiel:</p>
            <p>
                Mensen kennen mij als een oplossingsgericht en creatief persoon met een praktische aanpak. <br>
                In mijn vrije tijd ben ik graag bezig met puzzels en met programmeren. 
            </p>
        </div>

        <p class="font-medium text-lg text-blue-900">Opleidingen:</p>
        <div class="grid grid-cols-9 gap-x-0 w-2/3 my-2">
            <div class="grid grid-cols-9 col-span-9 gap-y-4">
                <div class="grid col-span-2 col-end-3 col-start-1">
                    <p>2019 - 2022</p>
                </div>
                <div class="grid col-span-6 col-start-3">
                    <p class="font-bold">Applicatie- en Mediaontwikkelaar / Software Developer</p>
                    <p>MBO-niveau 4, VONK in Schagen</p>
                    <p>Diploma behaald.</p>
                </div>
                <div class="grid col-span-2 col-end-3 col-start-1">
                    <p>2012 - 2019</p>
                </div>
                <div class="grid col-span-6 col-start-3">
                    <p class="font-bold">HAVO</p>
                </div>
            </div>
        </div>
        
        <p class="font-medium text-lg text-blue-900">Werkervaring:</p>
        <div class="grid grid-cols-9 gap-x-0 w-2/3 my-2">
            <div class="grid grid-cols-9 col-span-9 gap-y-4">
                <div class="grid col-span-3 col-end-4 col-start-1">
                    <p>Nov 2024 - Dec 2024</p>
                </div>
                <div class="grid col-span-5 col-start-5">
                    <p class="font-bold">Stagiair Developer</p>
                    <p>BitPuma (Digital Development Studio)</p>
                    <p>Den Helder, 15 uur per week.</p>
                    <p><b>Taken: </b>Werken aan tickets die aan mij zijn gekoppeld.</p>
                </div>
                <div class="grid col-span-3 col-end-4 col-start-1">
                    <p>Jun 2023 - Heden</p>
                </div>
                <div class="grid col-span-5 col-start-5">
                    <p class="font-bold">Vrijwilliger Administratief Medewerker</p>
                    <p>Stichting Present (organisatie voor maatschappelijk werk) en het Boelhuys (kringloopwinkel)</p>
                    <p>Den Helder, 24 uur per week.</p>
                    <p><b>Taken: </b>Werken aan (eigen) projecten, assisteren met werk voor kringloopwinkel, lid van flexgroep, andere klusjes.</p>
                </div>
                <div class="grid col-span-3 col-end-4 col-start-1">
                    <p>Jan 2022 - Jul 2022</p>
                </div>
                <div class="grid col-span-5 col-start-5">
                    <p class="font-bold">Stagiair Developer</p>
                    <p>Gudz Fightgear (webshop) en Kantoor260 (webdevelopment)</p>
                    <p>Heerhugowaard, 32 uur per week.</p>
                    <p><b>Taken: </b>Webtools ontwikkelen voor klanten, inventariseren van voorraad, ontwikkelen van een voorraadlijst, bestellingen inpakken en verzenden.</p>
                </div>
                <div class="grid col-span-3 col-end-4 col-start-1">
                    <p>Sep 2020 - Jan 2021</p>
                </div>
                <div class="grid col-span-5 col-start-5">
                    <p class="font-bold">Stagiair Developer</p>
                    <p>Blub Media (reclamebureau)</p>
                    <p>Heerhugowaard, 32 uur per week.</p>
                    <p><b>Taken: </b>Webtools ontwikkelen voor klanten, bijv. een calculator. Bijgedragen aan vernieuwing van de werkomgeving.</p>
                </div>
                <div class="grid col-span-3 col-end-4 col-start-1">
                    <p>2016</p>
                </div>
                <div class="grid col-span-5 col-start-5">
                    <p class="font-bold">Stagiair Algemeen Medewerker</p>
                    <p>Vogelasiel De Paddenstoel</p>
                    <p>Den Helder</p>
                    <p><b>Taken: </b>Verblijven schoonmaken, helpen met dieren vangen.</p>
                </div>
            </div>
        </div>

        <p class="font-medium text-lg text-blue-900">Vaardigheden:</p>
        <p class="font-medium text-lg text-blue-900">Computervaardigheden:</p>
        <div class="grid grid-cols-5 gap-x-0 w-1/2">
            <div class="grid grid-cols-2 col-span-3 gap-y-1">
                <div class="grid grid-cols-1 col-start-2 col-span-2">
                    <p class="font-bold">Software:</p>
                </div>
                <div class="grid grid-cols-3 col-span-2">
                    <div class="col-span-1">
                        <img src="images/icons/office.png" alt="MS Office">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Microsoft Office</p>
                    </div>
                </div>
                <div class="grid grid-cols-3 col-span-2">
                    <div class="col-span-1">
                        <img src="images/icons/visual-studio.png" alt="Visual Studio">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Visual Studio</p>
                    </div>
                </div>
                <div class="grid grid-cols-3 col-span-2">
                    <div class="col-span-1">
                        <img src="images/icons/github.png" alt="GitHub">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>GitHub</p>
                    </div>
                </div>
                <div class="grid grid-cols-3 col-span-2">
                    <div class="col-span-1">
                        <img src="images/icons/docker.png" alt="Docker">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Docker</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 col-span-3 gap-y-1">
                <div class="mt-3 grid grid-cols-1 col-start-2 col-span-2">
                    <p class="font-bold">Besturingssystemen:</p>
                </div>
                <div class="grid grid-cols-3 col-span-2">
                    <div class="col-span-1">
                        <img src="images/icons/windows.png" alt="Windows">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Windows</p>
                    </div>
                </div>
                <div class="grid grid-cols-3 col-span-2">
                    <div class="col-span-1">
                        <img src="images/icons/apple-macOS.png" alt="Apple MacOS">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Apple MacOS</p>
                    </div>
                </div>
                <div class="grid grid-cols-3 col-span-2">
                    <div class="col-span-1">
                        <img src="images/icons/android.png" alt="Android">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Android</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-5 col-span-5 gap-y-1">
                <div class="mt-3 grid grid-cols-1 col-start-2 col-span-2">
                    <p class="font-bold">Programmeertalen:</p>
                </div>
                <div class="mt-3 grid grid-cols-1 col-start-4 col-span-2">
                    <p class="font-bold">Niveau:</p>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/icons/html-5.png" alt="HTML">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>HTML</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Uitstekend</p>
                    </div>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/icons/css-3.png" alt="CSS">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>CSS</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Uitstekend</p>
                    </div>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/icons/mysql.png" alt="MySQL">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>MySQL</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Ruim Voldoende</p>
                    </div>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/icons/php.png" alt="PHP">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>PHP</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Voldoende</p>
                    </div>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/icons/.png" alt="Blade">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Blade</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Voldoende</p>
                    </div>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/icons/sass.png" alt="SASS">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>SASS</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Voldoende</p>
                    </div>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/icons/javascript.png" alt="Javascript">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Javascript</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Gemiddeld</p>
                    </div>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/icons/c-sharp.png" alt="C Sharp (C#)">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>C Sharp (C#)</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Gemiddeld</p>
                    </div>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/icons/.png" alt="Kotlin">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Kotlin</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Gemiddeld</p>
                    </div>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/icons/java-hexagon.png" alt="Java">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Java</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Gemiddeld</p>
                    </div>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/icons/xml.png" alt="XML">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>XML</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Basis</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-5 col-span-5 gap-y-1">
                <div class="mt-3 grid grid-cols-1 col-start-2 col-span-2">
                    <p class="font-bold">Frameworks:</p>
                </div>
                <div class="mt-3 grid grid-cols-1 col-start-4 col-span-2">
                    <p class="font-bold">Niveau:</p>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/laravel.png" height="24px" width="24px" alt="Laravel">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Laravel</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Voldoende</p>
                    </div>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/icons/vue-js.png" alt="Vue.js">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Vue.js</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Gemiddeld</p>
                    </div>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/icons/react-hexagon.png" alt="React">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>React</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Basis</p>
                    </div>
                </div>
                <div class="grid grid-cols-5 col-span-5">
                    <div class="col-span-1">
                        <img src="images/icons/node-js.png" alt="Node.js">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Node.js</p>
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p>Basis</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="grid grid-cols-3 gap-x-0 w-2/5">
            <div class="grid grid-cols-1 col-start-2 col-span-2">
                <p class="font-bold">Software:</p>
            </div>
            <div class="grid grid-cols-2 col-span-3">
                <div class="grid grid-cols-3 col-span-2">
                    <div class="col-span-1">
                        <img src="images/icons/.png" alt="">
                    </div>
                    <div class="grid grid-cols-1 col-span-2">
                        <p></p>
                    </div>
                </div>
            </div>
        </div> --}}
        <p class="mt-3 font-medium text-lg text-blue-900">Talenkennis:</p>
        <div class="grid grid-cols-9 gap-x-0">
            <div class="grid grid-cols-4 col-start-2 col-span-8">
                <p class="font-bold">Taal:</p>
                <p class="font-bold">Spreken:</p>
                <p class="font-bold">Schrijven:</p>
                <p class="font-bold">Lezen:</p>
            </div>
            <div class="grid grid-cols-2 col-span-9">
                <div class="grid grid-cols-9 col-span-2">
                    <div class="col-span-1">
                        <x-countries.netherlands />
                    </div>
                    <div class="grid grid-cols-4 col-span-8">
                        <p>Nederlands</p>
                        <p>Moedertaal</p>
                        <p>Moedertaal</p>
                        <p>Moedertaal</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 col-span-9">
                <div class="grid grid-cols-9 col-span-2">
                    <div class="col-span-1">
                        <x-countries.england-usa />
                    </div>
                    <div class="grid grid-cols-4 col-span-8">
                        <p>Engels</p>
                        <p>Uitstekend</p>
                        <p>Uitstekend</p>
                        <p>Uitstekend</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 col-span-9">
                <div class="grid grid-cols-9 col-span-2">
                    <div class="col-span-1">
                        <x-countries.germany />
                    </div>
                    <div class="grid grid-cols-4 col-span-8">
                        <p>Duits</p>
                        <p>Matig</p>
                        <p>Redelijk</p>
                        <p>Redelijk</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 col-span-9">
                <div class="grid grid-cols-9 col-span-2">
                    <div class="col-span-1">
                        <x-countries.france />
                    </div>
                    <div class="grid grid-cols-4 col-span-8">
                        <p>Frans</p>
                        <p>Matig</p>
                        <p>Redelijk</p>
                        <p>Matig</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 col-span-9">
                <div class="grid grid-cols-9 col-span-2">
                    <div class="col-span-1">
                        <x-countries.ireland />
                    </div>
                    <div class="grid grid-cols-4 col-span-8">
                        <p>Iers</p>
                        <p>Matig</p>
                        <p>Redelijk</p>
                        <p>Redelijk</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- ܬ --}}
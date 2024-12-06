<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Curriculum Vitae') }}
        </h2>
    </x-slot>

    <div class="flex-col border-2 border-gray-900/10 rounded-lg bg-white py-4 px-6 w-3/5 flex mb-8 mt-4 mx-auto">
        <div class="w-full">
            <div class="text-center mb-3">
                <p class="font-[475] text-blue-900 text-lg">
                    Curriculum Vitae
                </p>
            </div>
            <div class="my-3">
                <p class="font-bold text-blue-900">
                    Persoonsgegevens
                </p>
                <table class="table-fixed w-3/4">
                    <tbody>
                        <tr>
                            <td>Naam:</td>
                            <td>Jeffrey Huig</td>
                        </tr>
                        <tr>
                            <td>Adres:</td>
                            <td>Sportlaan 27</td>
                        </tr>
                        <tr>
                            <td>Postcode & Woonplaats:</td>
                            <td>1782 NB Den Helder</td>
                        </tr>
                        <tr>
                            <td>Telefoon:</td>
                            <td>06-39040010</td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td>jaj.huig@hotmail.com</td>
                        </tr>
                        <tr>
                            <td>Nationaliteit:</td>
                            <td>Nederlands</td>
                        </tr>
                        <tr>
                            <td>Geboortedatum:</td>
                            <td>24 februari 2000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="my-3">
                <p class="font-bold text-blue-900">
                    Profiel
                </p>
                <p class="italic">
                    Mensen kennen mij als een oplossingsgericht en creatief persoon met een praktische aanpak.
                    In mijn vrije tijd ben ik graag bezig met puzzels en met programmeren.
                </p>
            </div>
            <div class="my-3">
                <p class="font-bold text-blue-900">
                    Opleidingen
                </p>
                <p>
                    <span>
                        2019 - 2022
                    </span>
                    <span class="ml-8">
                        <b>Applicatie- en Media-ontwikkelaar / Software Developer</b>
                    </span>
                    <span class="ml-[120px]">
                        MBO-4, VONK in Schagen
                    </span><br>
                    <span class="ml-[120px]">
                        Diploma behaald.
                    </span>
                </p>
                <p>
                    <span>
                        2012 - 2019
                    </span>
                    <span class="ml-8">
                        <b>HAVO</b>
                    </span>
                </p>
            </div>
            <div class="my-3">
                <p class="font-bold text-blue-900">
                    Werkervaring
                </p>
                <div>
                    <p class="mt-4 mb-8">
                        <span>
                            Jun 2023 - Heden
                        </span>
                        <span class="ml-8">
                            <b>Vrijwilliger Administratief-Medewerker</b>
                        </span><br>
                        <span class="ml-40">
                            Stichting Present en het Boelhuys 
                        </span><br>
                        <span class="ml-40">
                            Den Helder, 24 uur per week.
                        </span><br>
                        <span>
                            {{-- <b>Taken:</b> --}}
                            Taken:
                        </span>
                        <span class="ml-[113px]">
                            Werken aan (eigen) projecten, 
                        </span><br>
                        <span class="ml-40">
                            assisteren met werk voor kringloopwinkel,
                        </span><br>
                        <span class="ml-40">
                            andere klusjes.
                        </span>
                    </p>
                    <p class="mb-8">
                        <span>
                            Jan 2022 - Jul 2022
                        </span>
                        <span class="ml-[20px]">
                            <b>Stagiair-Developer</b>
                        </span><br>
                        <span class="ml-[158px]">
                            Gudz FightGear en Kantoor260
                        </span><br>
                        <span class="ml-[158px]">
                            Heerhugowaard, 32 uur per week.
                        </span><br>
                        <span>
                            {{-- <b>Taken:</b> --}}
                            Taken:
                        </span>
                        <span class="ml-[111px]">
                            Webtools ontwikkelen voor klanten,
                        </span><br>
                        <span class="ml-[158px]">
                            inventariseren van voorraad,
                        </span><br>
                        <span class="ml-[158px]">
                            ontwikkelen van een voorraadlijst,
                        </span><br>
                        <span class="ml-[158px]">
                            bestellingen inpakken en verzenden.
                        </span>
                    </p>
                    <p class="mb-8">
                        <span>
                            Sep 2020 - Jan 2021
                        </span>
                        <span class="ml-3">
                            <b>Stagiair-Developer</b>
                        </span><br>
                        <span class="ml-[158px]">
                            Blub Media (Reclamebureau)
                        </span><br>
                        <span class="ml-[158px]">
                            Heerhugowaard, 32 uur per week.
                        </span><br>
                        <span>
                            {{-- <b>Taken:</b> --}}
                            Taken:
                        </span>
                        <span class="ml-[111px]">
                            Webtools ontwikkelen voor klanten, 
                        </span><br>
                        <span class="ml-[158px]">
                            bijvoorbeeld CostCalculator.
                        </span><br>
                        <span class="ml-[158px]">
                            Bijgedragen aan vernieuwing 
                        </span><br>
                        <span class="ml-[158px]">
                            van de werkomgeving.
                        </span>
                    </p>
                    <p>
                        <span>
                            2016
                        </span>
                        <span class="ml-[120px]">
                            <b>Stage Algemeen Medewerker</b>
                        </span><br>
                        <span class="ml-[158px]">
                            Vogelasiel De Paddenstoel
                        </span><br>
                        <span class="ml-[158px]">
                            Den Helder
                        </span><br>
                        <span>
                            {{-- <b>Taken:</b>  --}}
                            Taken:
                        </span>
                        <span class="ml-[111px]">
                            Verblijven schoonmaken,
                        </span><br>
                        <span class="ml-[158px]">
                            helpen met dieren vangen.
                        </span>
                    </p>
                </div>
            </div>
            <div class="my-5">
                <p class="font-bold text-blue-900">
                    Vaardigheden
                </p>
                <p class="font-medium text-blue-900 mt-3">
                    Computervaardigheden
                </p>
                <table class="table-fixed w-3/5 my-1">
                    <thead>
                        <tr>
                            <th>Programmeertaal</th>
                            <th>Niveau</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CSS</td>
                            <td>Uitstekend</td>
                        </tr>
                        <tr>
                            <td>HTML</td>
                            <td>Uitstekend</td>
                        </tr>
                        <tr>
                            <td>SQL</td>
                            <td>Ruim Voldoende</td>
                        </tr>
                        <tr>
                            <td>Blade</td>
                            <td>Voldoende</td>
                        </tr>
                        <tr>
                            <td>Laravel</td>
                            <td>Voldoende</td>
                        </tr>
                        <tr>
                            <td>Kotlin</td>
                            <td>Voldoende</td>
                        </tr>
                        <tr>
                            <td>C#</td>
                            <td>Gemiddeld</td>
                        </tr>
                        <tr>
                            <td>Java</td>
                            <td>Gemiddeld</td>
                        </tr>
                        <tr>
                            <td>Javascript</td>
                            <td>Gemiddeld</td>
                        </tr>
                        <tr>
                            <td>PHP</td>
                            <td>Gemiddeld</td>
                        </tr>
                        <tr>
                            <td>Sass</td>
                            <td>Gemiddeld</td>
                        </tr>
                        <tr>
                            <td>XML</td>
                            <td>Gemiddeld</td>
                        </tr>
                        <tr>
                            <td>Python</td>
                            <td>Basis</td>
                        </tr>
                    </tbody>
                </table>
                <p class="mt-3 font-medium text-blue-900">
                    Talenkennis
                </p>
                <table class="table-fixed w-3/4 my-1">
                    <thead class="text-left">
                        <tr>
                            <th>Taal</th>
                            <th>Spreken</th>
                            <th>Schrijven</th>
                            <th>Lezen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nederlands</td>
                            <td>Moedertaal</td>
                            <td>Moedertaal</td>
                            <td>Moedertaal</td>
                        </tr>
                        <tr>
                            <td>Engels</td>
                            <td>Uitstekend</td>
                            <td>Uitstekend</td>
                            <td>Uitstekend</td>
                        </tr>
                        <tr>
                            <td>Duits</td>
                            <td>Matig</td>
                            <td>Redelijk</td>
                            <td>Redelijk</td>
                        </tr>
                        <tr>
                            <td>Frans</td>
                            <td>Matig</td>
                            <td>Redelijk</td>
                            <td>Matig</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- ܬ --}}
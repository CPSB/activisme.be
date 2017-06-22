<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    {{-- Facebook implementation --}}
    <meta property="fb:app_id" 		content="1658071114490262" />
    <meta property="og:url" 		content="http://www.activisme.be/Crowdfund">
    <meta property="og:type" 		content="article" />
    <meta property="og:title" 		content="De bedeel caravan." />
    <meta property="og:description" content="Recent hebben we een oude caravan aangekocht, die gebruikt zal worden om verscheidene acties mee te doen, zoals kledij, dekens ,soep en voeding te gaan bedelen over het hele land aan de minderbedeelden en daklozen. Daar we de caravan voor verschillende doeleinden zullen gebruiken, zal het interieur ook volledig moeten aangepast worden, zodat deze uit mobiele eenheden bestaan, die gemakkelijk te verplaatsen zijn, volgens het doel dat we uitvoeren." />
    <meta property="og:image" 		content="http://www.activisme.be/assets/images/caravanCrowdfund.jpg" />

    <title>Activisme | Tom Manhaeghe</title>

    <link rel="stylesheet" href="{{ asset('css/header.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/caravan.css') }}"/>
</head>
<body>
<header>
    <nav>
        @include('layouts/components/front-end-navigation')
    </nav>
    <section>
        <h1>CROWDFUND</h1>
        <h3>ACTIVISME_BE</h3>
    </section>
</header>

<main>
    <section class="informatie">
        <section>
            <h1>De vrede_bedeel caravan</h1>
            <p>
                Recent hebben we een oude caravan aangekocht, die gebruikt zal worden om verscheidene acties mee te doen, zoals kledij, dekens ,soep en voeding te gaan bedelen over het hele land aan de minderbedeelden en daklozen. Daar we de caravan voor verschillende doeleinden zullen gebruiken, zal het interieur ook volledig moeten aangepast worden, zodat deze uit mobiele eenheden bestaan, die gemakkelijk te verplaatsen zijn, volgens het doel dat we uitvoeren. Aangezien we zonder enige subsidie of overheidssteun werken, is elke gift welkom.
                Het rekeningnummer om ons vrijblijvend te steunen:
            </p>
            <p>
                Belfius BE42 0636 1795 9854<br>BIC: GKCC BE BB
            </p>
        </section>
        <section>
            <h1>La caravane de la paix et de mendier</h1>
            <p>
                Récemment, nous avons acheté une vieille caravane, qui sera utilisé pour joindre plusieurs actions, comme les vêtements, des couvertures, de la nourriture et de la soupe à aller mendier dans tout le pays aux plus démunis et sans abri. Nous allons utiliser la caravane à des fins différentes, l'intérieur sera également entièrement personnalisé de sorte qu'il se compose d'unités mobiles, qui sont faciles à déplacer, selon l'objectif que nous effectuons. Puisque nous opérons sans subventions ou des aides d'État, tout don est le bienvenu
                Le compte pour nous soutenir :.
            </p>
            <p>
                Belfius BE42 0636 1795 9854<br>BIC: GKCC BE BB
            </p>
        </section>
        <section>
            <h1>The peace and handing out caravan</h1>
            <p>
                Recently, we bought an old caravan, which will be used to join several actions, such as clothing, blankets, food and soup to go begging all over the country to the less fortunate and homeless. We will use the caravan for different purposes, the interior will also be fully customized so that it consists of mobile units, which are easy to move, according to the objective that we perform. Since we operate without any subsidies or state aid, any donation is welcome
                The account to support us, feel free to:.
            </p>
            <p>
                Belfius BE42 0636 1795 9854<br>BIC: GKCC BE BB
            </p>
        </section>
    </section>
    <section class="sponsors">
        <h1>Sponsors</h1>
        {{-- grouping the images, Readers don't have to say images are grouped, important it tells what's on the image. --}}
        <div>
            <a href="http://www.vrede.be"><img style="height: 20em; width: 40em;" src="{{ asset('images/Vrede.jpg') }}" alt="Vrede.be"></a>
            <a href="https://www.akzonobel.com/nl/"><img style="height: 20em; width: 20em;" src="{{ asset('images/AkzoNobelTormorrowsAnswersToday.jpg') }}" alt="AkzoNobel Tormorrow's Answers Today"/></a>
            <a href="http://www.garageteirlynck.be/"><img style="height: 20em; width: 20em;" src="{{ asset('images/GarageTeirlynckWaregem.jpg') }}" alt="Garage Teirlynck Waregem"/></a>
        </div>
    </section>
</main>

<footer>
    @include('layouts/components/front-end-footer')
</footer>
</body>
</html>

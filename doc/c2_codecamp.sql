-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 okt 2021 om 14:26
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c2_codecamp`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `contenttype` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description[songtekst]` text DEFAULT NULL,
  `actors` varchar(1000) DEFAULT NULL,
  `colorcode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `content`
--

INSERT INTO `content` (`id`, `contenttype`, `name`, `description[songtekst]`, `actors`, `colorcode`) VALUES
(1, 'songtekst', 'Bohemian Rhapsody', 'Is this the real life?\r\nIs this just fantasy?\r\nCaught in a landside,\r\nNo escape from reality\r\nOpen your eyes,\r\nLook up to the skies and see,\r\nI\'m just a poor boy, I need no sympathy,\r\nBecause I\'m easy come, easy go,\r\nLittle high, little low,\r\nAny way the wind blows doesn\'t really matter to\r\nMe, to me\r\nMamaaa,\r\nJust killed a man,\r\nPut a gun against his head, pulled my trigger,\r\nNow he\'s dead\r\nMamaaa, life had just begun,\r\nBut now I\'ve gone and thrown it all away\r\nMama, oooh,\r\nDidn\'t mean to make you cry,\r\nIf I\'m not back again this time tomorrow,\r\nCarry on, carry on as if nothing really matters\r\nToo late, my time has come,\r\nSends shivers down my spine, body\'s aching all\r\nThe time\r\nGoodbye, everybody, I\'ve got to go,\r\nGotta leave you all behind and face the truth\r\nMama, oooh\r\nI don\'t want to die,\r\nI sometimes wish I\'d never been born at all.\r\nI see a little silhouetto of a man,\r\nScaramouch, Scaramouch, will you do the Fandango!\r\nThunderbolts and lightning, very, very frightening me\r\nGalileo, Galileo\r\nGalileo, Galileo\r\nGalileo, Figaro - magnificoo\r\nI\'m just a poor boy nobody loves me\r\nHe\'s just a poor boy from a poor family,\r\nSpare him his life from this monstrosity\r\nEasy come, easy go, will you let me go\r\nBismillah! No, we will not let you go\r\n(Let him go!) Bismillah! We will not let you go\r\n(Let him go!) Bismillah! We will not let you go\r\n(Let me go) Will not let you go\r\n(Let me go)(Never) Never let you go\r\n(Let me go) (Never) let you go (Let me go) Ah\r\nNo, no, no, no, no, no, no\r\nOh mama mia, mama mia, mama mia, let me go\r\nBeelzebub has a devil put aside for me, for me,\r\nFor meee\r\nSo you think you can stop me and spit in my eye\r\nSo you think you can love me and leave me to die\r\nOh, baby, can\'t do this to me, baby,\r\nJust gotta get out, just gotta get right outta here\r\nNothing really matters, Anyone can see,\r\nNothing really matters,\r\nNothing really matters to me\r\nAny way the wind blows...', 'Queen', 'red'),
(2, 'songtekst', 'killer queen', 'She keeps her Moet et Chandon\r\nIn her pretty cabinet\r\n\"Let them eat cake\", she says\r\nJust like Marie Antoinette\r\nA built-in remedy\r\nFor Khrushchev and Kennedy\r\nAt anytime an invitation\r\nYou can\'t decline\r\nCaviar and cigarettes\r\nWell versed in etiquette\r\nExtraordinarily nice\r\nShe\'s a Killer Queen\r\nGunpowder, gelatine\r\nDynamite with a laser beam\r\nGuaranteed to blow your mind\r\nAnytime\r\nRecommended at the price\r\nInsatiable an appetite\r\nWanna try?\r\nTo avoid complications\r\nShe never kept the same address\r\nIn conversation\r\nShe spoke just like a baroness\r\nMet a man from China\r\nWent down to Geisha Minah\r\nThen again incidentally\r\nIf you\'re that way inclined\r\nPerfume came naturally from Paris (naturally)\r\nFor cars she couldn\'t care less\r\nFastidious and precise\r\nShe\'s a Killer Queen\r\nGunpowder, gelatine\r\nDynamite with a laser beam\r\nGuaranteed to blow your mind\r\nAnytime\r\nDrop of a hat she\'s as willing as\r\nPlayful as a pussy cat\r\nThen momentarily out of action\r\nTemporarily out of gas\r\nTo absolutely drive you wild, wild\r\nShe\'s all out to get you\r\nShe\'s a Killer Queen\r\nGunpowder, gelatine\r\nDynamite with a laser beam\r\nGuaranteed to blow your mind\r\nAnytime\r\nRecommended at the price\r\nInsatiable an appetite\r\nWanna try?\r\nYou wanna try', 'Queen', '#4682b4'),
(3, 'songtekst', 'madness', 'I, I can\'t get these memories out of my mind\r\nAnd some kind of madness has started to evolve\r\nI, I tried so hard to let you go\r\nBut some kind of madness is swallowing me whole, yeah\r\nI have finally seen the light\r\nAnd I have finally realized\r\nWhat you mean\r\nOh oh oh\r\nAnd now, I need to know is this real love\r\nOr is it just madness keeping us afloat?\r\nAnd when I look back at all the crazy fights we had\r\nLike some kind of madness\r\nWas taking control\r\nYeah\r\nAnd now I have finally seen the light\r\nAnd I have finally realized\r\nWhat you need\r\nMm\r\nAnd now I have finally seen the end (Finally seen the end)\r\nAnd I\'m not expecting you to care (Expecting you to care)\r\nBut I have finally seen the light (Finally seen the light)\r\nI have finally realized (Realized)\r\nI need to love\r\nI need to love\r\nCome to me,\r\nTrust in your dream\r\nCome on and rescue me\r\nYes I have known, I can be wrong\r\nMaybe I\'m too headstrong\r\nOur love is\r\nMadness', 'Muse', '#cc0000'),
(4, 'songtekst', 'Uprising', 'Paranoia is in bloom\r\nThe PR transmissions will resume\r\nThey\'ll try to push drugs that keep us all dumbed down\r\nAnd hope that we will never see the truth around\r\n(So come on)\r\nAnother promise, another scene\r\nAnother packaged lie to keep us trapped in greed\r\nAnd all the green belts wrapped around our minds\r\nAnd endless red tape to keep the truth confined\r\n(So come on)\r\nThey will not force us\r\nThey will stop degrading us\r\nThey will not control us\r\nWe will be victorious\r\n(So come on)\r\nInterchanging mind control\r\nCome, let the revolution take its toll\r\nIf you could flick the switch and open your third eye\r\nYou\'d see that we should never be afraid to die\r\n(So come on)\r\nRise up and take the power back\r\nIt\'s time the fat cats had a heart attack\r\nYou know that their time\'s coming to an end\r\nWe have to unify and watch our flag ascend\r\n(So come on)\r\nThey will not force us\r\nThey will stop degrading us\r\nThey will not control us\r\nWe will be victorious\r\n(So come on)\r\nThey will not force us\r\nThey will stop degrading us\r\nThey will not control us\r\nWe will be victorious\r\n(So come on)', 'Muse', '#b97d4b'),
(5, 'songtekst', 'uprising', 'Allow me in your tub\r\nJust allow me in your club\r\nAllow me to drink from your cup\r\nI\'ll be coming back for more\r\nAllow me in your dream\r\nAllow me in your scene\r\nJust allow me on your knees\r\nI\'ll be coming back for more\r\nSisters, keep on rising\r\nBrothers, keep on rising\r\nThis girl keeps on rising\r\nKeep on rising up\r\nAll I Believe in your school\r\nI Believe in your rules\r\nI Believe in your truth\r\nI\'ll be coming back for more\r\nI Believe in your land\r\nI Believe in that man\r\nI Believe in your command\r\nI\'ll be coming back for more\r\nSisters, Brothers, Lovers\r\nKeep on rising up\r\nSisters, keep on rising\r\nBrothers, keep on rising\r\nThis girl keeps on rising\r\nKeep on rising up\r\nUprising, uprising\r\nUprising, uprising\r\nSisters, Brothers, Lovers\r\nThis girl keep on rising up\r\nSisters, keep on rising\r\nBrothers, keep on rising\r\nThis girl keeps on rising\r\nKeep on rising up', 'MyBaby', '#b97d4b'),
(6, 'songtekst', 'Plug in baby', 'I\'ve exposed your lies, baby\r\nThe underneath no big surprise\r\nNow it\'s time for changing\r\nAnd cleansing everything\r\nTo forget your love\r\nMy plug in baby\r\nCrucifies my enemies\r\nWhen I\'m tired of giving\r\nMy plug in baby\r\nIn unbroken virgin realities\r\nIs tired of living\r\nDon\'t confuse\r\nBaby you\'re gonna lose\r\nYour own game\r\nChange me\r\nAnd replace the envying\r\nTo forget your love\r\nMy plug in baby\r\nCrucifies my enemies\r\nWhen I\'m tired of giving\r\nMy plug in baby\r\nIn unbroken virgin realities\r\nAnd tired of living\r\nAnd I\'ve seen your loving\r\nMine is gone', 'Muse', '#b97d4b'),
(7, 'songtekst', 'We are the champions', 'I\'ve paid my dues\r\nTime after time\r\nI\'ve done my sentence\r\nBut committed no crime\r\nAnd bad mistakes\r\nI\'ve made a few\r\nI\'ve had my share of sand\r\nKicked in my face\r\nBut I\'ve come through\r\nAnd we mean to go on and on and on and on\r\nWe are the champions, my friends\r\nAnd we\'ll keep on fighting till the end\r\nWe are the champions\r\nWe are the champions\r\nNo time for losers\r\n\'Cause we are the champions of the World\r\nI\'ve taken my bows\r\nAnd my curtain calls\r\nYou brought me fame and fortune\r\nAnd everything that goes with it\r\nI thank you all\r\nBut it\'s been no bed of roses\r\nNo pleasure cruise\r\nI consider it a challenge before\r\nThe human race\r\nAnd I ain\'t gonna lose\r\nAnd we mean to go on and on and on and on\r\nWe are the champions, my friends\r\nAnd we\'ll keep on fighting till the end\r\nWe are the champions\r\nWe are the champions\r\nNo time for losers\r\n\'Cause we are the champions of the World\r\nWe are the champions, my friends\r\nAnd we\'ll keep on fighting till the end\r\nWe are the champions\r\nWe are the champions\r\nNo time for losers\r\n\'Cause we are the champions of the World', 'Queen', '#4682b4'),
(8, 'songtekst', 'Transylvia', '[instrumental]', 'Iron Maiden', '#cc0000'),
(9, 'tools', 'kettingzaag', 'Een kettingzaag (ook motorzaag, motorkettingzaag of boomzaag genoemd) is een draagbare machine om mee te zagen. De belangrijkste functie is hout zagen. Er zijn verschillende typen aandrijving voor kettingzagen: pneumatisch, hydraulisch, elektrisch en door middel van een verbrandingsmotor (vaak ook motorkettingzaag genoemd). De elektrische kettingzaag en de motorkettingzaag zijn het meest gangbaar. Elektrische kettingzagen zijn met name bedoeld voor particulier gebruik. Ze zijn milieuvriendelijker en maken doorgaans minder lawaai dan kettingzagen op benzine. Ze zijn praktischer in gebruik doordat ze lichter zijn. Elektrische kettingzagen zijn vaak goedkoper in aanschaf. Nadeel is het snoer bij sommige elektrische kettingzagen waardoor de actieradius beperkt is, maar draadloze elektrische kettingzagen bestaan ook. Deze werken op een accu.\r\nKettingzaag met brandstofmotor[bewerken | brontekst bewerken]\r\nBenzinekettingzagen hebben bijna zonder uitzondering een tweetaktmotor. Benzine-aangedreven kettingzagen hebben het voordeel dat ze een grotere mobiliteit hebben en krachtiger zijn dan elektrische kettingzagen.\r\n', NULL, NULL),
(10, 'tools', 'hamers ', 'Een hamer is een klop- of slagwerktuig. Een hamer bestaat uit een steel, het handvat, met aan het eind de zogenaamde hamerkop.\r\n\r\nDe vorm en grootte en het materiaal van de hamerkop en de lengte van de steel hangen sterk af van het type hamer. Bij hamers met een ijzeren hamerkop staat vaak het aantal grammen in het metaal geslagen. Voor speciale uitvoeringen, zoals voor percussie-instrumenten, wordt ook de term mallet (uit het Engels) gebruikt.\r\n\r\nTypen hamers\r\nDe volgende tabel geeft een overzicht van typen van hamers:\r\n\r\ngewone hamer\r\nEen metalen hamerkop van 50-300 gram op een houten steel van ca. 30 cm lang die onder meer wordt gebruikt om spijkers (draadnagels) in houten voorwerpen te slaan.\r\nklauwhamer\r\nZoals een gewone hamer, maar de achterkant van de hamer heeft een platte V-groef waarin spijkers geklemd kunnen worden. De bovenkant is afgerond zodat de geklemde spijker uit het object gerold kan worden.\r\nvuist of moker\r\nEen zware hamer met een vierkante hamerkop van 1000-1500 gram op een steel van 30 cm lang, voor zwaar werk. Met een rubberen opzetstuk wordt een vuisthamer gebruikt om tegels of straatstenen in het zand te leggen voor het maken van bestrating.\r\ntegelhamer\r\nHouten hamer met grote houten kop en een korte steel. Om tegels te leggen.\r\nstraathamer\r\nEen hamer om te straten, met een kromme zijde om stenen door midden te slaan, en een rechte afgeplatte zijde om stenen aan te slaan (bestraten).\r\nvoorhamer\r\nEen hamer om sloopwerkzaamheden uit te voeren. Een hamerkop van een paar kilo op een steel van een meter lang.\r\nrubberen hamer\r\nEen rubberen hamer wordt vooral gebruikt bij het leggen van tegels op grond. Een kleine hamer met een rubberen gewicht die kan worden gebruikt voor voorzichtig werk, zoals het aankloppen van kleine lijmverbindingen in de houtbewerking. Kampeerders gebruiken een rubber hamer om de tentpinnen in de grond te slaan. Door (para)medici wordt soms een kleine hamer gebruikt met een zacht gedeelte. Deze heeft meestal twee gekleurde uiteinden.\r\nhouten hamer\r\nEen hamer met een houten hamerkop die kan worden gebruikt voor voorzichtig werk zoals het vooruithelpen van een guts of beitel in de houtbewerking. De hamerkop is gemaakt van een harde houtsoort, meestal beukenhout. De steel is gemaakt van een taaie houtsoort. Dit is nodig om de klappen goed op te kunnen vangen. De hamerkop kan rond (cilindervormig) zijn of een blokvorm hebben.\r\nsmidshamer\r\nEen hamer met een gevormd gewicht die kan worden gebruikt om (heet) ijzer op een aambeeld vorm te geven.\r\nbikhamer\r\nEen hamer om te bikken, bijvoorbeeld om slakken te verwijderen, ontstaan bij het elektrisch lassen.\r\nsleg, slegge of slei\r\nEen langstelige houten hamer, onder meer in gebruik om wiggen in boomstammen te drijven en palen in de grond te slaan.\r\nzandhamer\r\nEen (kunststoffen) hamer met diverse hamerkoppen en grootte, waarvan de kop gevuld is met zand, teneinde de terugslag te verkleinen. Wordt toegepast wanneer het werkstuk met zo min mogelijke beschadiging vervormd moet worden of om lagers op assen te tikken.\r\nbankhamer\r\nEen bankhamer heeft aan één kant een iets bolvormig baanvlak en aan de andere kant een pen die haaks staat op de langsrichting van de steel. Hij is verkrijgbaar met een gewicht van 50 tot 2000 gram. Deze hamer wordt veel gebruikt door bank- en plaatwerkers.\r\nhaarhamer\r\nEen haarhamer is een hamer, waarbij de beide kanten uitlopen in een dun plat vlak. Hiermee wordt een zeis gehaard (scherp gemaakt).\r\nbolhamer\r\nEen bol- of bolkophamer is een hamer voor het bewerken van metaal, met name het hameren (strekken) van bijvoorbeeld koper- of zilverplaat.\r\nbilhamer of zwaaispits\r\nEen bilhamer is een hamer voor het bewerken van molenstenen. Door steenhouwers wordt deze hamer zwaaispits genoemd en werd voorheen gebruikt voor het ruw voorhakken van blokken natuursteen.\r\npletsteenhamer\r\nEen pletsteenhamer of bouchardhamer is een hamer voor het vlak maken van molenstenen en andere natuursteen\r\nloodhamer\r\nEen loodhamer is een hamer die in de beeldhouwkunst gebruikt wordt, bestaande uit een (veelal) koperen of messing band gevuld met lood. De boven- en onderkant van de band zijn open. Met die open – loden – kant wordt geslagen op een beitel. Het lood dempt de slagkracht door de relatieve zachtheid. De koperen band houdt het lood bijeen en is noodzakelijk om de kop aan een (houten) steel te bevestigen. Aldus kan zeer fijn scharreer- of bouchardeerwerk gedaan worden in natuursteen.\r\nnoodhamer\r\nEen noodhamer is bedoeld om, bijvoorbeeld bij een ongeluk, een ruit in te slaan om een voertuig (trein, auto) of een ruimte snel te kunnen verlaten.\r\nstemhamer\r\nEigenlijk geen hamer maar een sleutel (daarom ook stemsleutel genoemd). Wordt gebruikt bij het stemmen van piano\'s en andere snaarinstrumenten.\r\nreflexhamer\r\nHamertje met een rubber kop waarmee bij een medisch onderzoek de reflexen, vooral de kniepeesreflex, worden getest.\r\nkrijgshamer\r\nHamer die als wapen gebruikt wordt.\r\nterugslagvrije hamer (dead blow)\r\nEen hamer gevuld met hagel (lood).', NULL, NULL),
(11, 'tools', 'cirkelzagen', '\r\nEen cirkelzaag (of radiaalzaag) is een zaag met een blad in de vorm van een stalen schijf, die met een motor tot een zeer hoog toerental wordt aangedreven. De schijf kan in een zaagtafel zijn gemonteerd waarover het te zagen materiaal wordt aangevoerd, of ingebouwd in een constructie samen met een elektromotor tot draagbare handcirkelzaag. Deze heeft een minder krachtige motor en kan ook dunner materiaal zagen.\r\nCirkelzaagbladen bestaan in soorten en maten, met allerlei verschillende vertandingen, en ook de diameter kan sterk verschillen (normaal is ca. 25 cm, maar industriële cirkelzagen met veel grotere bladen bestaan ook). De maximale zaagdiepte wordt bepaald door de straal van het cirkelzaagblad.\r\nEen cirkelzaag die bedoeld is om latten, buizen, houten balken en dergelijke te zagen wordt ook wel een afkorter of afkortzaag genoemd.\r\n', NULL, NULL),
(12, 'movie', 'Live and Let Die', 'Live and Let Die is de achtste James Bondfilm, geproduceerd door EON Productions. De film werd uitgebracht in 1973 en is gebaseerd op het gelijknamige boek van Ian Fleming uit 1954. Het is de eerste Bondfilm waarin Roger Moore de rol van Bond vertolkte, ter vervanging van Sean Connery.[1] Voodoo en Tarot spelen een belangrijke rol in de film.', '24, 25, 26', NULL),
(13, 'movie', 'The Man with the Golden Gun', 'The Man with the Golden Gun is de negende James Bondfilm geproduceerd door EON Productions, met Roger Moore als James Bond. De film is uitgebracht in 1974. Hij is gebaseerd op het gelijknamige boek uit 1965. De film speelt zich af tegen de achtergrond van de oliecrisis van 1973.', '24, 27, 28', NULL),
(14, 'movie', 'The Spy Who Loved Me', 'The Spy Who Loved Me is de tiende James Bondfilm geproduceerd door EON Productions, met Roger Moore als James Bond. De film is uitgebracht in 1977. Het gelijknamige boek uit 1962 werd echter door veel lezers niet zo gewaardeerd, waardoor Fleming alleen toestemming gaf voor het gebruik van de titel in de film.', '24, 29, 30', NULL),
(15, 'movie', 'Moonraker', 'Moonraker is het derde James Bondboek geschreven in 1955 door Ian Fleming. In 1979 werd het boek verfilmd door EON Productions. De rol van James Bond werd vertolkt door Roger Moore en de film werd geregisseerd door Lewis Gilbert. Omdat sciencefictionfilms zeer succesvol bleken te zijn, ging Bond in deze film naar de ruimte terwijl in het originele boek Bond gewoon op de aarde blijft.', '24, 31, 32, 33, 34', NULL),
(16, 'movie', 'For Your Eyes Only', 'For Your Eyes Only is de twaalfde James Bondfilm geproduceerd door EON Productions, met Roger Moore als James Bond. De film is uitgebracht in 1981. Het is gebaseerd op een kort verhaaltje uit de gelijknamige verhalenbundel uit 1960.\r\n\r\nDe titelsong werd gezongen door Sheena Easton. Het nummer For Your Eyes Only kwam in Nederland op nummer 1 in de Nederlandse Top 40.', '24, 35, 36, 37', NULL),
(17, 'movie', 'Octopussy', 'Octopussy is de dertiende James Bondfilm geproduceerd door EON Productions, met voor de zesde keer Roger Moore als James Bond.\r\n\r\nDe film kwam in hetzelfde jaar uit als de onofficiële (niet van EON Productions) Bondfilm Never Say Never Again met Sean Connery als James Bond. Connery speelde eerder al in een aantal officiële Bondfilms, wat leidde tot een felle concurrentiestrijd.\r\n\r\nDe film kwam voor het eerst uit op 6 juni 1983 en werd tussen 10 augustus 1982 en 25 januari 1983 op verschillende locaties opgenomen. Het budget werd geschat op 27,5 miljoen dollar. De film verdiende zichzelf ruim terug: hij bracht wereldwijd bijna 190 miljoen dollar op. Roger Moore ontving 4 miljoen dollar voor zijn werk aan deze film.', '24, 38, 39, 40, 41, 42, 43', NULL),
(18, 'movie', 'A View to a Kill', 'A View to a Kill (1985) is de veertiende film in de James Bondserie, geregisseerd door John Glen. Het was de zevende en laatste film waarin de rol van agent 007 werd gespeeld door Roger Moore.', '24, 44, 45, 46', NULL),
(19, 'character', 'Darth Vader', 'Darth Vader is een personage uit de Star Wars-films. Hij is als Sith-leerling ondergeschikt aan keizer Palpatine, ook bekend als Darth Sidious.\r\n\r\nIn de jaren 1977, 1980 en 1983 werd Darth Vader gespeeld door acteur David Prowse en stuntman Bob Anderson. Zijn stem werd echter ingesproken door James Earl Jones, omdat diens stem veel zwaarder, duisterder en dreigender klonk.', 'James Earl Jones', '#f0c91f'),
(20, 'character', 'Timoty Dalton ', 'Dalton groeide op in Manchester. Nadat hij zijn school had afgemaakt, ging hij naar het National Youth Theatre. Hij studeerde twee jaar lang aan de Royal Academy of Dramatic Art. In 1966 ging hij naar het Birmingham Repertory Theatre, waar hij hoofdrollen speelde.', NULL, '#317f43'),
(21, 'character', 'Luke Skywalker', 'Luke Skywalker is een personage uit de Star Warssaga, gespeeld door acteur Mark Hamill. Luke is de tweelingbroer van prinses Leia. Hun ouders zijn Padmé Amidala en Anakin Skywalker. Skywalker werd opgevoed door zijn oom Owen Lars en tante Beru Whitesun Lars.', 'Mark Hamill\r\nAidan Barton', '#317f43'),
(22, 'tools', 'beitel', 'Een moderne beitel is een langwerpig stuk gereedschap van staal met aan één zijde een scherpe snede. Een beitel voor houtbewerking heeft meestal een houten of kunststoffen handvat ook wel hecht genoemd of is onderdeel van een schaaf. De snijkant wordt vouw genoemd. Verder zijn er beitels voor onder andere steen- en metaalbewerking. Beitels kunnen machinaal en handmatig toegepast worden.\r\nHoutbeitels worden als handgereedschap in het algemeen in de houtbewerking gebruikt om te kunnen steken of te hakken. Aan de toepassing ontleent ieder type houtbeitel zijn vorm. Houtbeitels kunnen qua hoofdverdeling onderscheiden worden in hakbeitels, steekbeitels en gutsen. Alle beitels zijn voorzien van een heft van hout of kunststof, ook wel een hecht genoemd. Het heft is voorzien van een metalen blad dat (vrijwel altijd) aan één zijde een scherp toelopend uiteinde heeft, de vouw en de snede geheten. Bij het minder scherp worden kan de beitel opnieuw worden geslepen, waarna de ontstane braam eraf kan worden gewet met een wetsteen. De hoek waaronder de houtbeitel wordt geslepen (de slijphoek) en gewet, is belangrijk en kan variëren per type beitel. In het algemeen geldt hiervoor: Hoe kleiner de slijphoek, des te scherper de beitel echter des te eerder hij weer bot wordt.[3', NULL, NULL),
(23, 'character', 'George Clooney', 'George Timothy Clooney (Lexington, Kentucky, 6 mei 1961) is een Amerikaans acteur, regisseur, scenarioschrijver en producent met meer dan dertig filmprijzen en nominaties op zijn naam. Voor de film Syriana won hij een Oscar voor beste mannelijke bijrol. Tevens won hij als producent een Oscar voor beste film voor Argo. Ook kreeg hij Oscarnominaties voor zijn rollen in Michael Clayton en The Descendants, een European Film Award (voor Good Night, and Good Luck) en meerdere Golden Globes (voor Syriana en O Brother, Where Art Thou?).', NULL, NULL),
(24, 'acteur', 'Roger Moore', NULL, NULL, NULL),
(25, 'acteur', 'Yaphet Kotto', NULL, NULL, NULL),
(26, 'acteur', 'Jane Seymour', NULL, NULL, NULL),
(27, 'acteur', 'Christopher Lee', NULL, NULL, NULL),
(28, 'acteur', 'Britt Ekland', NULL, NULL, NULL),
(29, 'acteur', 'Barbara Bach', NULL, NULL, NULL),
(30, 'acteur', 'Curt Jurgens', NULL, NULL, NULL),
(31, 'acteur', 'Lois Chiles', NULL, NULL, NULL),
(32, 'acteur', 'Michael Lonsdale', NULL, NULL, NULL),
(33, 'acteur', 'Richard Kiel', NULL, NULL, NULL),
(34, 'acteur', 'Corinne Cléry', NULL, NULL, NULL),
(35, 'acteur', 'Carole Bouquet', NULL, NULL, NULL),
(36, 'acteur', 'Julian Glover', NULL, NULL, NULL),
(37, 'acteur', 'Topol', NULL, NULL, NULL),
(38, 'acteur', 'Maud Adams', NULL, NULL, NULL),
(39, 'acteur', 'Louis Jourdan', NULL, NULL, NULL),
(40, 'acteur', 'Kristina Wayborn', NULL, NULL, NULL),
(41, 'acteur', 'Kabir Bedi', NULL, NULL, NULL),
(42, 'acteur', 'Steven Berkoff', NULL, NULL, NULL),
(43, 'acteur', 'Christopher Walken', NULL, NULL, NULL),
(44, 'acteur', 'Grace Jones', NULL, NULL, NULL),
(45, 'acteur', 'Tanya Roberts', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `drinks`
--

CREATE TABLE `drinks` (
  `id` int(11) NOT NULL,
  `contenttype` varchar(255) NOT NULL DEFAULT 'drinks',
  `name` varchar(255) NOT NULL,
  `drink_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `drinks`
--

INSERT INTO `drinks` (`id`, `contenttype`, `name`, `drink_type`) VALUES
(1, 'drinks', 'koffee', 'warm_drinks'),
(2, 'drinks', 'latte', 'warm_drinks'),
(3, 'drinks', 'thee', 'warm_drinks'),
(4, 'drinks', 'cola', 'soft_drinks'),
(5, 'drinks', 'seven up', 'soft_drinks'),
(6, 'drinks', 'sinas', 'soft_drinks');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `admin`, `email`, `password`) VALUES
(1, 'test', 1, 'test@email.com', '$2y$10$Uo.QKVyHlQhYDQsD2xvHzuV8gNB0nJYMyhg9Z7LSQnq457BhS3r.m'),
(3, 'normaluser', 0, 'normaluser@gmail.com', '$2y$10$w.ddb.tQ846Dn25ZY3Ad1OxYL.ivRfWfKhREFlKroPS88Ihp/v01m'),
(4, 'visitor', 0, 'ivisit@gmail.com', '$2y$10$8FfnbNKxiiyTPBcw/wsfveVj.vKqaWbdp4Q8GCxzvYaBZCcmnA.2m');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT voor een tabel `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

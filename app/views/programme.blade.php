@extends('layout')
@section('content')
<div class="container">
  <div class="jumbotron">
    <h2>Présidence:</h2>
      <p>Quel mandat pour Shockwave ? Un petit descriptif vous est proposé, classé par pôle. Le pôle présidence profite néanmoins de cette fenêtre qui lui est accordée pour tenter d’exprimer au mieux la mentalité de la liste afin de permettre à ceux qui nous connaissent peu, qui ne nous connaissent pas, ou même à ceux qui ne nous connaissent qu’à travers ce qu’ils ont entendu ici ou là d’en savoir plus sur nous.
      Qui sommes-nous donc ? Une réponse unique n’existe pas, si ce n’est celle-ci : nous sommes une équipe de 35 personnes dont l’objectif est de préserver et de solidifier la vie étudiante. Notre objectif sera de nous battre pour vous, pour nous, afin que l’ensemble du campus soit intégré du mieux possible à la vie dans celui-ci. Notre intérêt est dans le bien être de chacun des étudiants ici, qu’il soit en TSP, en TEM, ou même en bachelor, car au-delà des considérations et des préjugés, nous nous intéressons vraiment à la personne, et l’apprécions (ou non) à sa juste valeur, peu importe qu’il soit en 1A, 1B, 1C, 2… Cela étant dit, nous tenons tout de même à affirmer notre respect des traditions, mais respect des traditions et respect d’autrui vont de pair !
      Nous nous mettons cependant sur la même ligne de conduite que les BDE qui nous ont précédés sur de nombreux points : la communication interne, qui permet de rassembler tellement de monde à chaque soirée et à chaque évènement ; fournir aux étudiants les moyens de profiter d'une vie associative riche; préserver la transparence de la vie étudiante, et a fortiori conserver la bonne cohésion de celle-ci. Dans cette optique, nous organiserons mensuellement une réunion inter associative pour que chacune des associations ait une voix écoutée par chacune des autres.<br/>
      Merci de nous avoir lus, nous espérons au cours de cette campagne pouvoir vous prouver notre volonté de faire, de vous défendre et de vous divertir autant que possible.
      Cordialement, et très sincèrement vôtre.

      Le président, ses deux vice-présidents.</p>
  </div>
  <div role="tabpanel">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#tresorerie" aria-controls="tresorerie" role="tab" data-toggle="tab">Pôle trésorerie</a></li>
      <li role="presentation"><a href="#swei" aria-controls="swei" role="tab" data-toggle="tab">Pôle SWEI</a></li>
      <li role="presentation"><a href="#soiree" aria-controls="messages" role="tab" data-toggle="tab">Pôle soirées</a></li>
      <li role="presentation"><a href="#re" aria-controls="settings" role="tab" data-toggle="tab">Pôle Relations Entreprises</a></li>
      <li role="presentation"><a href="#voyages" aria-controls="settings" role="tab" data-toggle="tab">Pôle voyages</a></li>
      <li role="presentation"><a href="#pougnes" aria-controls="settings" role="tab" data-toggle="tab">Pôle Pougnes</a></li>
      <li role="presentation"><a href="#web" aria-controls="settings" role="tab" data-toggle="tab">Pôle Web</a></li>
      <li role="presentation"><a href="#communication" aria-controls="settings" role="tab" data-toggle="tab">Pôle Communication</a></li>
      <li role="presentation"><a href="#wed" aria-controls="settings" role="tab" data-toggle="tab">Pôle WED</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="tresorerie">
        Nous nous engageons à assurer la viabilité du BDE à travers une tenue scrupuleuse et attentive des comptes ainsi qu’à soutenir la vie associative de l’école.
      </div>
      <div role="tabpanel" class="tab-pane" id="swei">
        En septembre, pour le WEI, nous vous proposons un voyage en direction du Sud français. Celui-ci se déroulera du 4 au 7 Septembre 2015, et promet d’être mémorable. Nous vous emmènerons au sein d’un camping quatre étoiles offrant toutes les installations nécessaire à votre amusement : piscine, toboggans, plage à proximité etc. Fini aussi les petits creux entre les repas, les participants pourront profiter sur toute la journée d’un buffet à volonté, d’un barbecue, et d’un open bar qui seront à disposition toute la journée.
        Après avoir repris des forces, les activités ne manqueront pas : en plus d’un jeu en équipe qui se déroulera sur tout le voyage, nous proposerons tout un tas d’activités à la fois individuelles (auto-tamponneuses, pédalos, saut à l’élastique etc.) mais aussi collectives (beach soccer, beach volley, la rosalie etc.)
        Fin de journée, on peut se reposer ! Que nenni, au WEI le repos est à bannir du vocabulaire : apéros mousses et apéros couleurs seront là pour vous amuser, et mieux vous préparer aux soirées « Néon » et « Chic détail Shock ».
        Les participants seront prévenus au préalable des thèmes afin qu'ils puissent jouer le jeu un maximum.
      </div>
      <div role="tabpanel" class="tab-pane" id="soiree">
        <p>
          <h3>Soirée Parrainage: « Couple célèbre »</h3>
          <p>Je suis Laurel, tu es Hardy. Je suis Adam et toi Ève, je suis Chirac et toi Jospin… Entre parrains et fillots, on se partage les rôles ! C’est le moment de créer une complicité et de trouver une idée de couple qui enchantera les deux partis. Le temps de la soirée de parrainage, montrer vous fièrement avec votre moitié et incarnez les couples les plus célèbre de l’Histoire.</p>

          <h3>Soiree Goodies: « Décadence romaine”</h3>
          <p>Une petite leçon d’histoire… et si on faisait un saut dans l’Antiquité ? Ce soir-là, tout le monde porte sa toge, ces accessoires, l’alcool coule à flot et les fruits calent les petits creux. Gladiateur, pharaon, guerrier romain, gaulois ou héros de la mythologie, revivez l’époque antique et surtout sa décadence ! </p>

          <h3>Soirée de Noël : « Soirée cadeaux !!!! »</h3>
          <p>Cette fois ci, pas d’imprévu ! On veut une soirée de Noël digne de ce nom au forum ! Un Dress code en blanc et rouge, des mères Noël, des pères Noël et c’est parti ! C’est la soirée pour vous faire plaisir mais aussi faire plaisir à ceux que vous aimez, alors chacun devra venir avec un petit cadeau à offrir, histoire de perpétuer la tradition.</p>

          <h3>The Last One : « Moi si j’étais toi … »</h3>
          <p>Et si on finissait l’année en inversant les rôles ? Ou plutôt les sexes ! Le temps d’une soirée, les filles deviennent des mecs et les mecs découvrent les joies de la féminité !
            Facile de trouver son déguisement, négociez et échangez les vêtements avec votre moitié : Robe ou jupe courte, décolleté profond sur fausse poitrine  pigeonnante, bas résille et porte jarretelles et rouge à lèvre pour messieurs, et cravate, nœud pap, barbe et moustache pour mesdemoiselles !</p>

          </p>
      </div>
      <div role="tabpanel" class="tab-pane" id="re">
        Au pôle RE, nous veillons à assurer la stabilité entre Telecom et le monde extérieur. Pour cela, nos objectifs sont de renforcer encore les partenariats avec les entreprises et d’augmenter la visibilité de l’école au sein de celles-ci. Au sein du campus, nous resterons sur la même ligne de conduite que les BDE précédents en organisant des amphis, des conférences, mais surtout la journée professionnelle.
        En plus de cela, et en considération des besoins de chacun, nous avons pour objectif de mettre en place un « Pôle Emploi » dont l’objectif sera de faire profiter à l’ensemble du campus des partenariats du BDE.
      </div>
      <div role="tabpanel" class="tab-pane active" id="voyages">
        Au pôle voyages, on vous fera… on vous fera voyager. Premier voyage dès le 14 mai. Nous vous emmenons à Barcelone pour trois jours pour profiter d’une des villes les plus festives d’Europe sous le soleil d’Espagne. Deuxième destination, l’an prochain nous vous donnons rendez-vous à l’Oktoberfest, vivez le plus grand rassemblement d’amateurs de bières, le plus grand festival d’Allemagne. Enfin, notre dernière destination vous emmènera très loin. Comme chaque année, nous vous proposons un voyage à Amsterdam, cet incontournable des destinations, ce pilier des amateurs de culture, un voyage qui vous ravira !
      </div>
      <div role="tabpanel" class="tab-pane" id="pougnes">
        Le pôle Pougnes vous garantit des cours clairs, précis et structurés avec des fiches récapitulatives. Vos pougnes Shockwave se feront un plaisir de participer à l’obtention de votre diplôme et à répondre à toutes les questions pour des informations complémentaires dans n’importe quelle matière.
      </div>
      <div role="tabpanel" class="tab-pane" id="web">
        Le pôle Web aura essentiellement pour tâche d'assurer la communication entre le bureau des
        élèves et les étudiants du campus à travers la diffusion d'actualités et de
        renseignements. Il mettra aussi à disposition les applications nécessaires
        aux réservations dans le cadre d'événements particuliers (voyages et soirées majeures principalement).
      </div>
      <div role="tabpanel" class="tab-pane" id="communication">
        Le pôle Communication répondra présent pour la réalisation des affiches, trailers et bande-annonces des soirées BDE ainsi que pour aider les associations/projets sollicitant notre aide. Nous tenterons également de promouvoir l’audiovisuel au sein du campus et de la vie de l’école.
      </div>
      <div role="tabpanel" class="tab-pane active" id="wed">
        Un weekend de Mai, nous serons environs 80 à partir pour arriver dans un camping à proximité de Bidart. Ce lieu n’est pas anodin, il vous permettra de profiter des magnifiques plages des Landes où , en plus du panorama magnifique, vous aurez l’occasion de vous initier au surf. D’autres activités seront disponibles : plongée, voile, et encore bien plus !
        Pour la soirée, nous organiserons une fête digne des plus grandes férias, bières et Pastis seront à l’honneur pour une soirée aux couleurs rouge et blanche.
      </div>
    </div>
  </div>
</div>
@stop

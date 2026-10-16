<x-app-layout :assets="$assets ?? []">
   <div class="row">
      <div class="col-md-12 col-lg-12">
         <div class="row row-cols-1">
            <div class="d-slider1 overflow-hidden ">
<ul class="swiper-wrapper list-inline m-0 p-0 mb-2">
   <!-- Solde de la caisse (Portefeuille) -->
   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
      <div class="card-body">
         <div class="d-flex align-items-center">
            <div class="p-3 bg-soft-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 55px; height: 55px;">
               <svg class="text-primary" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                   <path d="M20 12V8H6a2 2 0 0 1-2-2c0-1.1.9-2 2-2h12v4"/><path d="M4 6v12c0 1.1.9 2 2 2h14v-4"/><path d="M18 12a2 2 0 0 0-2 2c0 1.1.9 2 2 2h4v-4h-4z"/>
               </svg>
            </div>
            <div>
               <p class="mb-2">Solde de la caisse</p>
               <h4 class="counter" style="visibility: visible;">45 200 MAD</h4>
            </div>
         </div>
      </div>
   </li>
   
   <!-- Cotisations Reçues (Courbe) -->
   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
      <div class="card-body">
         <div class="d-flex align-items-center">
            <div class="p-3 bg-soft-info rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 55px; height: 55px;">
               <svg class="text-info" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                   <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline>
               </svg>
            </div>
            <div>
               <p class="mb-2">Taux Recouvrement</p>
               <h4 class="counter">85%</h4>
            </div>
         </div>
      </div>
   </li>
   
   <!-- Dépenses (Facture) -->
   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
      <div class="card-body">
         <div class="d-flex align-items-center">
            <div class="p-3 bg-soft-warning rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 55px; height: 55px;">
               <svg class="text-warning" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                   <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
               </svg>
            </div>
            <div>
               <p class="mb-2">Dépenses (Mois)</p>
               <h4 class="counter">3 400 MAD</h4>
            </div>
         </div>
      </div>
   </li>
   
   <!-- Impayés (Alerte) -->
   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
      <div class="card-body">
         <div class="d-flex align-items-center">
            <div class="p-3 bg-soft-danger rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 55px; height: 55px;">
               <svg class="text-danger" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                   <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line>
               </svg>
            </div>
            <div>
               <p class="mb-2">Total Impayés</p>
               <h4 class="counter text-danger">12 500 MAD</h4>
            </div>
         </div>
      </div>
   </li>
   
   <!-- Réclamations (Outils) -->
   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1100">
      <div class="card-body">
         <div class="d-flex align-items-center">
            <div class="p-3 bg-soft-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 55px; height: 55px;">
               <svg class="text-primary" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                   <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
               </svg>
            </div>
            <div>
               <p class="mb-2">Réclamations Ouvertes</p>
               <h4 class="counter">3</h4>
            </div>
         </div>
      </div>
   </li>
</ul>
               <div class="swiper-button swiper-button-next"></div>
               <div class="swiper-button swiper-button-prev"></div>
            </div>
         </div>
      </div>
      
      <!-- Graphique Bilan -->
      <div class="col-md-12 col-lg-8">
         <div class="row">
            <div class="col-md-12">
               <div class="card" data-aos="fade-up" data-aos-delay="800">
                  <div class="card-header d-flex justify-content-between flex-wrap">
                     <div class="header-title">
                        <h4 class="card-title">Bilan Financier</h4>
                        <p class="mb-0">Entrées vs Sorties</p>
                     </div>
                     <div class="d-flex align-items-center align-self-center">
                        <div class="d-flex align-items-center text-primary">
                           <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                              <g id="Solid dot2"><circle id="Ellipse 65" cx="12" cy="12" r="8" fill="currentColor"></circle></g>
                           </svg>
                           <div class="ms-2"><span class="text-gray">Recettes</span></div>
                        </div>
                        <div class="d-flex align-items-center ms-3 text-danger">
                           <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                              <g id="Solid dot3"><circle id="Ellipse 66" cx="12" cy="12" r="8" fill="currentColor"></circle></g>
                           </svg>
                           <div class="ms-2"><span class="text-gray">Dépenses</span></div>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div id="d-main" class="d-main"></div>
                  </div>
               </div>
            </div>

            <!-- Liste Rouge des Impayés -->
            <div class="col-md-12 col-lg-12">
               <div class="card overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                  <div class="card-header d-flex justify-content-between flex-wrap">
                     <div class="header-title">
                        <h4 class="card-title mb-2 text-danger">Liste Rouge des Impayés</h4>
                        <p class="mb-0">Résidents avec retard de paiement</p>
                     </div>
                     <button class="btn btn-sm btn-outline-danger">Envoyer Mises en demeure</button>
                  </div>
                  <div class="card-body p-0">
                     <div class="table-responsive mt-4">
                        <table id="basic-table" class="table table-striped mb-0" role="grid">
                           <thead>
                              <tr>
                                 <th>COPROPRIÉTAIRE</th>
                                 <th>APPARTEMENT</th>
                                 <th>MOIS EN RETARD</th>
                                 <th>MONTANT DÛ</th>
                                 <th>ACTION</th>
                              </tr>
                           </thead>
                           <tbody>
                             <tr>
    <td>
        <div class="d-flex align-items-center">
            <!-- Tsawra dyal Ahmed -->
            <img class="rounded-circle img-fluid avatar-40 me-3 shadow-sm" src="https://randomuser.me/api/portraits/men/32.jpg" alt="profile" style="object-fit: cover;">
            <h6 class="mb-0">Ahmed Alaoui</h6>
        </div>
    </td>
    <td>Bâtiment A - N° 12</td>
    <td>3 Mois</td>
    <td class="text-danger font-weight-bold">600 MAD</td>
    <td><button class="btn btn-sm btn-primary">Relancer</button></td>
</tr>
<tr>
    <td>
        <div class="d-flex align-items-center">
            <!-- Tsawra dyal Karim -->
            <img class="rounded-circle img-fluid avatar-40 me-3 shadow-sm" src="https://randomuser.me/api/portraits/men/44.jpg" alt="profile" style="object-fit: cover;">
            <h6 class="mb-0">Karim Bennani</h6>
        </div>
    </td>
    <td>Bâtiment B - N° 04</td>
    <td>1 Mois</td>
    <td class="text-danger font-weight-bold">200 MAD</td>
    <td><button class="btn btn-sm btn-primary">Relancer</button></td>
</tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <div class="col-md-12 col-lg-4">
         <div class="row">
            <!-- Compte Bancaire Syndicat -->
            <div class="col-md-6 col-lg-12">
               <div class="card credit-card-widget" data-aos="fade-up" data-aos-delay="900">
                  <div class="card-header pb-4 border-0">
                     <div class="p-4 primary-gradient-card rounded border border-white">
                        <div class="d-flex justify-content-between align-items-center">
                           <div>
                              <h5 class="font-weight-bold text-white">COMPTE SYNDICAT</h5>
                              <P class="mb-0 text-white">Loi 18-00 & 106-12</P>
                           </div>
                           <div class="master-card-content text-white">
                              <i class="icon"><svg width="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg></i>
                           </div>
                        </div>
                        <div class="my-4 text-white">
                           <div class="card-number">
                              <span class="fs-6 me-2">RIB:</span>
                              <span class="fs-5 me-2">011</span>
                              <span class="fs-5 me-2">780</span>
                              <span class="fs-5 me-2">0000</span>
                              <span class="fs-5">4521</span>
                           </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between text-white">
                           <h6>Banque Populaire</h6>
                           <h6 class="ms-5">Agence Centre</h6>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Activité Récente -->
            <div class="col-md-12 col-lg-12">
               <div class="card" data-aos="fade-up" data-aos-delay="400">
                  <div class="card-header d-flex justify-content-between flex-wrap">
                     <div class="header-title">
                        <h4 class="card-title mb-2">Activité récente</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class=" d-flex profile-media align-items-top mb-2">
                        <div class="profile-dots-pills border-success mt-1"></div>
                        <div class="ms-4">
                           <h6 class=" mb-1">Paiement validé (Apt 14)</h6>
                           <span class="mb-0 text-gray">Aujourd'hui 08:10</span>
                        </div>
                     </div>
                     <div class=" d-flex profile-media align-items-top mb-2">
                        <div class="profile-dots-pills border-warning mt-1"></div>
                        <div class="ms-4">
                           <h6 class=" mb-1">Nouvelle réclamation (Fuite d'eau)</h6>
                           <span class="mb-0 text-gray">Hier 14:30</span>
                        </div>
                     </div>
                     <div class=" d-flex profile-media align-items-top mb-2">
                        <div class="profile-dots-pills border-danger mt-1"></div>
                        <div class="ms-4">
                           <h6 class=" mb-1">Dépense enregistrée (Ascenseur)</h6>
                           <span class="mb-0 text-gray">Hier 10:15</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</x-app-layout>
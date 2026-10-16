<x-app-layout headerTitle="Trésorerie & Cotisations" headerText="Suivi des paiements, validation des reçus et gestion des impayés.">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h4 class="card-title">Trésorerie & Suivi des Cotisations</h4>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-primary btn-sm d-flex align-items-center">
                            <svg class="me-1" width="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
                            Filtrer par Mois
                        </button>
                        <!-- HNA BDDLNA L'BOUTON BACH Y7ELL L'MODAL -->
                        <button type="button" class="btn btn-primary btn-sm d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addCotisationModal">
                            <svg class="me-1" width="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            Nouvelle Échéance
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped mb-0" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>RÉFÉRENCE</th>
                                    <th>COPROPRIÉTAIRE</th>
                                    <th>APPARTEMENT</th>
                                    <th>MONTANT TOTAL</th>
                                    <th>RESTE À PAYER</th>
                                    <th>STATUT</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Payé -->
                                <tr>
                                    <td class="font-weight-bold">#COT-2026-10-01</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="bg-soft-primary rounded img-fluid avatar-30 me-2" src="{{asset('images/shapes/02.png')}}" alt="profile">
                                            <span class="font-weight-bold">Youssef Tazi</span>
                                        </div>
                                    </td>
                                    <td>Bâtiment A - N° 05</td>
                                    <td>200 MAD</td>
                                    <td>0 MAD</td>
                                    <td><span class="badge bg-success text-white px-2 py-1">Payé</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-soft-primary" title="Télécharger Reçu PDF">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Paiement Partiel -->
                                <tr>
                                    <td class="font-weight-bold">#COT-2026-10-02</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="bg-soft-primary rounded img-fluid avatar-30 me-2" src="{{asset('images/shapes/03.png')}}" alt="profile">
                                            <span class="font-weight-bold">Salma Farih</span>
                                        </div>
                                    </td>
                                    <td>Bâtiment B - N° 12</td>
                                    <td>200 MAD</td>
                                    <td class="text-warning font-weight-bold">100 MAD</td>
                                    <td><span class="badge bg-warning text-dark px-2 py-1">Partiel</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-soft-info" title="Valider le reste">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-soft-primary" title="Voir Historique">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                        </button>
                                    </td>
                                </tr>

                                <!-- En retard -->
                                <tr>
                                    <td class="font-weight-bold">#COT-2026-09-15</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="bg-soft-primary rounded img-fluid avatar-30 me-2" src="{{asset('images/shapes/01.png')}}" alt="profile">
                                            <span class="font-weight-bold">Ahmed Alaoui</span>
                                        </div>
                                    </td>
                                    <td>Bâtiment A - N° 12</td>
                                    <td>200 MAD</td>
                                    <td class="text-danger font-weight-bold">200 MAD</td>
                                    <td><span class="badge bg-danger text-white px-2 py-1">En retard</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-soft-danger" title="Générer Mise en demeure">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><line x1="12" y1="18" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================= MODAL NOUVELLE COTISATION ================= -->
    <div class="modal fade" id="addCotisationModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nouvelle Cotisation / Échéance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Sélectionner le Lot / Résident</label>
                            <select class="form-select">
                                <option>A-12 (Ahmed Alaoui)</option>
                                <option>B-04 (Karim Bennani)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Montant (MAD)</label>
                            <input type="number" class="form-control" placeholder="Ex: 200">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date d'échéance</label>
                            <input type="date" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Générer l'échéance</button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
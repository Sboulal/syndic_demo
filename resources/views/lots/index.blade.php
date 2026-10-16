<x-app-layout headerTitle="Gestion des Lots" headerText="Suivi des appartements, magasins et quotes-parts.">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h4 class="card-title">Gestion des Lots & Appartements</h4>
                    </div>
                    <!-- BOUTON LI KAY7ELL L'MODAL -->
                    <button type="button" class="btn btn-primary btn-sm d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addLotModal">
                        <svg class="me-1" width="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Ajouter un Lot
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped mb-0" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>N° LOT</th>
                                    <th>BÂTIMENT / ÉTAGE</th>
                                    <th>TYPE</th>
                                    <th>PROPRIÉTAIRE</th>
                                    <th>QUOTE-PART</th>
                                    <th>STATUT</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold">A-12</td>
                                    <td>Bâtiment A - 3ème Étage</td>
                                    <td>Appartement</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!-- Image RandomUser -->
                                            <img class="rounded-circle img-fluid avatar-30 me-2 shadow-sm" src="https://randomuser.me/api/portraits/men/32.jpg" alt="profile" style="object-fit: cover;">
                                            <span class="font-weight-bold">Ahmed Alaoui</span>
                                        </div>
                                    </td>
                                    <td>1.5%</td>
                                    <td><span class="badge bg-danger text-white px-2 py-1">Impayé</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-soft-info" title="Modifier">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-soft-primary" title="Voir Fiche">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">B-04</td>
                                    <td>Bâtiment B - 1er Étage</td>
                                    <td>Magasin / Commercial</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!-- Image RandomUser -->
                                            <img class="rounded-circle img-fluid avatar-30 me-2 shadow-sm" src="https://randomuser.me/api/portraits/men/44.jpg" alt="profile" style="object-fit: cover;">
                                            <span class="font-weight-bold">Karim Bennani</span>
                                        </div>
                                    </td>
                                    <td>2.0%</td>
                                    <td><span class="badge bg-success text-white px-2 py-1">À jour</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-soft-info" title="Modifier">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-soft-primary" title="Voir Fiche">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
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

    <!-- ================= MODAL AJOUTER UN LOT ================= -->
    <div class="modal fade" id="addLotModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un nouveau lot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">N° Lot</label>
                            <input type="text" class="form-control" placeholder="Ex: A-12">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Type</label>
                            <select class="form-select">
                                <option>Appartement</option>
                                <option>Magasin / Commercial</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bâtiment / Étage</label>
                            <input type="text" class="form-control" placeholder="Ex: Bâtiment A - 3ème Étage">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quote-part (%)</label>
                            <input type="number" step="0.01" class="form-control" placeholder="Ex: 1.5">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
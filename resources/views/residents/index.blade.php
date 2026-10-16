<x-app-layout headerTitle="Annuaire des Résidents" headerText="Gestion des copropriétaires et locataires.">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h4 class="card-title">Annuaire des Résidents & Copropriétaires</h4>
                    </div>
                    <!-- BOUTON LI KAY7ELL L'MODAL -->
                    <button type="button" class="btn btn-primary btn-sm d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addResidentModal">
                        <svg class="me-1" width="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Nouveau Résident
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped mb-0" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>NOM & PRÉNOM</th>
                                    <th>PROFIL / STATUT</th>
                                    <th>LOT ASSOCIÉ</th>
                                    <th>TÉLÉPHONE</th>
                                    <th>EMAIL</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!-- Image RandomUser -->
                                            <img class="rounded-circle img-fluid avatar-30 me-2 shadow-sm" src="https://randomuser.me/api/portraits/men/32.jpg" alt="profile" style="object-fit: cover;">
                                            <span class="font-weight-bold">Youssef Tazi</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary text-white px-2 py-1">Propriétaire Résidant</span></td>
                                    <td>Bâtiment A - N° 05</td>
                                    <td>+212 6 12 34 56 78</td>
                                    <td>youssef.tazi@example.com</td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-soft-info" title="Modifier">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!-- Image RandomUser -->
                                            <img class="rounded-circle img-fluid avatar-30 me-2 shadow-sm" src="https://randomuser.me/api/portraits/women/44.jpg" alt="profile" style="object-fit: cover;">
                                            <span class="font-weight-bold">Salma Farih</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning text-dark px-2 py-1">Locataire</span></td>
                                    <td>Bâtiment B - N° 12</td>
                                    <td>+212 6 98 76 54 32</td>
                                    <td>salma.farih@example.com</td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-soft-info" title="Modifier">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
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

    <!-- ================= MODAL AJOUTER UN RÉSIDENT ================= -->
    <div class="modal fade" id="addResidentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un Résident</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nom & Prénom</label>
                            <input type="text" class="form-control" placeholder="Ex: Youssef Tazi">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Profil / Statut</label>
                            <select class="form-select">
                                <option>Propriétaire Résidant</option>
                                <option>Locataire</option>
                                <option>Propriétaire Non-Résidant</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Téléphone</label>
                                <input type="text" class="form-control" placeholder="+212 6...">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="email@exemple.com">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
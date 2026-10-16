<x-app-layout headerTitle="Réclamations & Assistance" headerText="Suivi des tickets, pannes et demandes des résidents.">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h4 class="card-title">Liste des Réclamations</h4>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-primary btn-sm d-flex align-items-center">
                            <svg class="me-1" width="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
                            Filtrer
                        </button>
                        <!-- BOUTON LI KAY7ELL L'MODAL -->
                        <button type="button" class="btn btn-primary btn-sm d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addTicketModal">
                            <svg class="me-1" width="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            Nouveau Ticket
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped mb-0" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>RÉSIDENT</th>
                                    <th>SUJET</th>
                                    <th>PRIORITÉ</th>
                                    <th>STATUT</th>
                                    <th>DATE</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold">#REF-001</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!-- Image RandomUser -->
                                            <img class="rounded-circle img-fluid avatar-30 me-2 shadow-sm" src="https://randomuser.me/api/portraits/women/44.jpg" alt="profile" style="object-fit: cover;">
                                            <div>
                                                <span class="mb-0 font-weight-bold">Salma Farih</span>
                                                <p class="mb-0 text-muted" style="font-size: 11px;">Apt B-12</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fuite d'eau au parking sous-sol</td>
                                    <td><span class="badge bg-danger text-white px-2 py-1">Haute</span></td>
                                    <td><span class="badge bg-primary text-white px-2 py-1">Nouvelle</span></td>
                                    <td>15 Oct 2026</td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-soft-primary" title="Consulter">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-soft-info" title="Traiter">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">#REF-002</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!-- Image RandomUser -->
                                            <img class="rounded-circle img-fluid avatar-30 me-2 shadow-sm" src="https://randomuser.me/api/portraits/men/32.jpg" alt="profile" style="object-fit: cover;">
                                            <div>
                                                <span class="mb-0 font-weight-bold">Ahmed Alaoui</span>
                                                <p class="mb-0 text-muted" style="font-size: 11px;">Apt A-05</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Lumière grillée au 2ème étage</td>
                                    <td><span class="badge bg-warning text-dark px-2 py-1">Moyenne</span></td>
                                    <td><span class="badge bg-info text-white px-2 py-1">En cours</span></td>
                                    <td>14 Oct 2026</td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-soft-primary" title="Consulter">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-soft-success" title="Résoudre">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">#REF-003</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!-- Image RandomUser -->
                                            <img class="rounded-circle img-fluid avatar-30 me-2 shadow-sm" src="https://randomuser.me/api/portraits/men/44.jpg" alt="profile" style="object-fit: cover;">
                                            <div>
                                                <span class="mb-0 font-weight-bold">Karim Bennani</span>
                                                <p class="mb-0 text-muted" style="font-size: 11px;">Apt C-01</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Panne d'ascenseur (Bâtiment C)</td>
                                    <td><span class="badge bg-danger text-white px-2 py-1">Haute</span></td>
                                    <td><span class="badge bg-success text-white px-2 py-1">Résolue</span></td>
                                    <td>10 Oct 2026</td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-soft-primary" title="Consulter">
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

    <!-- ================= MODAL NOUVEAU TICKET ================= -->
    <div class="modal fade" id="addTicketModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ouvrir un Ticket de Réclamation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Sujet de la réclamation</label>
                            <input type="text" class="form-control" placeholder="Ex: Fuite d'eau, Panne d'ascenseur...">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Priorité</label>
                            <select class="form-select">
                                <option value="basse">Basse</option>
                                <option value="moyenne" selected>Moyenne</option>
                                <option value="haute">Haute (Urgente)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description détaillée de l'incident</label>
                            <textarea class="form-control" rows="4" placeholder="Décrivez le problème ici..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pièce jointe (Photo / Vidéo)</label>
                            <input type="file" class="form-control" accept="image/*,video/*">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Créer le Ticket</button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
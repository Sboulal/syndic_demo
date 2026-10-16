<x-app-layout headerTitle="Dépenses, Budget & Fournisseurs" headerText="Suivi des factures, charges de la copropriété et règlements.">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h4 class="card-title">Registre des Dépenses & Fournisseurs</h4>
                    </div>
                    <!-- BOUTON LI KAY7ELL L'MODAL -->
                    <button type="button" class="btn btn-primary btn-sm d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addDepenseModal">
                        <svg class="me-1" width="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Nouvelle Dépense
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped mb-0" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>N° FACTURE</th>
                                    <th>FOURNISSEUR</th>
                                    <th>MOTIF / DESCRIPTION</th>
                                    <th>MONTANT</th>
                                    <th>STATUT</th>
                                    <th>DATE</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold">#FAC-2026-088</td>
                                    <td>Ascenseurs Maroc SARL</td>
                                    <td>Maintenance trimestrielle ascenseur (Bât A)</td>
                                    <td>1 500 MAD</td>
                                    <td><span class="badge bg-success text-white px-2 py-1">Payé</span></td>
                                    <td>10 Oct 2026</td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-soft-primary" title="Voir Justificatif">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">#FAC-2026-092</td>
                                    <td>Redal / Lydec (Électricité)</td>
                                    <td>Facture éclairage parties communes</td>
                                    <td class="text-danger font-weight-bold">850 MAD</td>
                                    <td><span class="badge bg-danger text-white px-2 py-1">À payer</span></td>
                                    <td>12 Oct 2026</td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-soft-success" title="Régler la facture">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
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

    <!-- ================= MODAL NOUVELLE DÉPENSE ================= -->
    <div class="modal fade" id="addDepenseModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Enregistrer une Dépense</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Fournisseur</label>
                            <input type="text" class="form-control" placeholder="Nom de l'entreprise ou prestataire">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Motif / Description</label>
                            <textarea class="form-control" rows="2" placeholder="Ex: Achat produits d'entretien"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Montant (MAD)</label>
                                <input type="number" step="0.01" class="form-control" placeholder="0.00">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Statut</label>
                                <select class="form-select">
                                    <option>À payer</option>
                                    <option>Payé</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Facture / Justificatif (PDF, JPG)</label>
                            <input type="file" class="form-control">
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
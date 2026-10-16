<x-app-layout>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h4 class="card-title">Coffre-fort Numérique</h4>
                    </div>
                    <!-- BOUTON LI KAY7ELL L'MODAL -->
                    <button type="button" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addDocumentModal">
                        <svg class="me-2" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="17 8 12 3 7 8"></polyline>
                            <line x1="12" y1="3" x2="12" y2="15"></line>
                        </svg>
                        Ajouter un Document
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>NOM DU DOCUMENT</th>
                                    <th>CATÉGORIE</th>
                                    <th>DATE D'AJOUT</th>
                                    <th>TAILLE</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Document PDF -->
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="p-2 bg-soft-danger rounded me-3">
                                                <svg width="24" height="24" class="text-danger" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                </svg>
                                            </div>
                                            <span class="font-weight-bold">Règlement_Copropriété_Syndify.pdf</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary">Légal</span></td>
                                    <td>01 Octobre 2026</td>
                                    <td>2.4 MB</td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-soft-info">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="7 10 12 15 17 10"></polyline>
                                                <line x1="12" y1="15" x2="12" y2="3"></line>
                                            </svg>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-soft-danger">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Document Word -->
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="p-2 bg-soft-primary rounded me-3">
                                                <svg width="24" height="24" class="text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                </svg>
                                            </div>
                                            <span class="font-weight-bold">Procès_Verbal_AG_2025.docx</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Assemblée Générale</span></td>
                                    <td>15 Janvier 2026</td>
                                    <td>1.1 MB</td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-soft-info">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="7 10 12 15 17 10"></polyline>
                                                <line x1="12" y1="15" x2="12" y2="3"></line>
                                            </svg>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-soft-danger">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
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

    <!-- ================= MODAL AJOUTER UN DOCUMENT ================= -->
    <div class="modal fade" id="addDocumentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un Document</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nom du document</label>
                            <input type="text" class="form-control" placeholder="Ex: PV Assemblée 2026">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Catégorie</label>
                            <select class="form-select">
                                <option>Légal</option>
                                <option>Assemblée Générale</option>
                                <option>Contrats</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fichier (PDF, DOCX)</label>
                            <input type="file" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Uploader</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
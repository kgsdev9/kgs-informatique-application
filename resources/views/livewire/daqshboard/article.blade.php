<div>
    <main>

        <!-- =======================
        Post list START -->
        <section class="py-4">
            <div class="container">
            <div class="row pb-4">
                    <div class="col-12">
                <!-- Title -->
                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                            <h1 class="mb-2 mb-sm-0 h2">Liste de mes articles  </h1>
                            <a href="{{route('article.create')}}" class="btn btn-sm btn-primary mb-0"><i class="fas fa-plus me-2"></i>Créer un article</a>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                  <!-- Post list table START -->
                  <div class="card border bg-transparent rounded-3">
                    <!-- Card body START -->
                    <div class="card-body p-3">

                      <!-- Search and select START -->
                      <div class="row g-3 align-items-center justify-content-between mb-3">
                        <!-- Search -->
                        <div class="col-md-8">
                          <form class="rounded position-relative">
                            <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                          </form>
                        </div>

                        <!-- Select option -->
                        <div class="col-md-3">
                          <!-- Short by filter -->
                          <form>
                            <select class="form-select z-index-9 bg-transparent" aria-label=".form-select-sm">
                              <option value="">Sort by</option>
                              <option>Free</option>
                              <option>Newest</option>
                              <option>Oldest</option>
                            </select>
                          </form>
                        </div>
                      </div>
                      <!-- Search and select END -->

                      <!-- Post list table START -->
                      <div class="table-responsive border-0">
                        <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                          <!-- Table head -->
                          <thead class="table-dark">
                            <tr>
                              <th scope="col" class="border-0 rounded-start">Title</th>
                              <th scope="col" class="border-0">Catégories</th>
                              <th scope="col" class="border-0">Published Date</th>

                              <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                          </thead>

                          <!-- Table body START -->
                          <tbody class="border-top-0">
                            <!-- Table item -->
                            @foreach ($allArticles as $article)
                            <tr>
                              <!-- Table data -->
                              <td>
                                <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">{{$article->title}}</a></h6>
                              </td>
                              <!-- Table data -->
                              <td>
                                <h6 class="mb-0"><a href="#">
                                    @foreach ($article->articletags as $tag )
                                        {{$tag->name}}
                                    @endforeach
                                </a></h6>
                              </td>
                              <!-- Table data -->
                              <td>{{$article->created_at}}</td>
                              <!-- Table data -->

                              <td>
                                <div class="d-flex gap-2">
                                  <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete"><i class="bi bi-trash"></i></a>
                                  <a href="dashboard-post-edit.html" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit"><i class="bi bi-pencil-square"></i></a>
                                </div>
                              </td>
                            </tr>
                            @endforeach

                          </tbody>
                          <!-- Table body END -->
                        </table>
                      </div>
                      <!-- Post list table END -->

                      <!-- Pagination START -->
                      <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                        <!-- Content -->
                        <p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                        <!-- Pagination -->
                        <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                          <ul class="pagination pagination-sm pagination-bordered mb-0">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Prev</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                            <li class="page-item"><a class="page-link" href="#">15</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#">Next</a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                      <!-- Pagination END -->
                    </div>
                  </div>
                  <!-- Post list table END -->
              </div>
            </div>
          </div>
        </section>
        <!-- =======================
        Main contain END -->

        </main>

</div>

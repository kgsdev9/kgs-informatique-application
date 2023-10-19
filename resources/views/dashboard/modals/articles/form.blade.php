<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...<div class="card border mb-4">
            <div class="card-header border-bottom p-3">
              <h5 class="card-header-title mb-0">Profile</h5>
            </div>
            <form wire:submit.prevent="createPost">
            <div class="card-body">
              <!-- Full name -->
              <div class="mb-3">
                <label class="form-label">Full name</label>
                <div class="input-group">
                  <input type="text" class="form-control" value="Louis" placeholder="First name">
                  <input type="text" class="form-control" value="Ferguson" placeholder="Last name">
                </div>
              </div>
              <!-- Username -->
              <div class="mb-3">
                <label class="form-label">Username</label>
                <div class="input-group">
                  <span class="input-group-text">webestica.com</span>
                  <input type="text" class="form-control" value="louisferguson">
                </div>
              </div>
              <!-- Profile picture -->
              <div class="mb-3">
                <label class="form-label">Profile picture</label>
                <!-- Avatar upload START -->
                <div class="d-flex align-items-center">
                  <div class="position-relative me-3">
                    <!-- Avatar edit -->
                    <div class="position-absolute top-0 end-0  z-index-9">
                      <a class="btn btn-sm btn-light btn-round mb-0 mt-n1 me-n1" href="#"> <i class="bi bi-pencil"></i> </a>
                    </div>
                    <!-- Avatar preview -->
                    <div class="avatar avatar-xl">
                      <img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/03.jpg" alt="">
                    </div>
                  </div>
                  <!-- Avatar remove button -->
                  <div class="avatar-remove">
                    <button type="button" class="btn btn-light">Delete</button>
                  </div>
                </div>
                <!-- Avatar upload END -->
              </div>
              <!-- Job title -->
              <div class="mb-3">
                <label class="form-label">Job title</label>
                <input class="form-control" type="text" value="An editor at Blogzine">
              </div>
              <!-- Location -->
              <div class="mb-3">
                <label class="form-label">Location</label>
                <input class="form-control" type="text" value="New Hampshire">
              </div>
              <!-- Bio -->
              <div class="mb-3">
                <label class="form-label">Bio</label>
                <textarea class="form-control" rows="3">I’ve found a way to get paid for my favorite hobby, and do so while following my dream of traveling the world.</textarea>
                <div class="form-text">Brief description for your profile.</div>
              </div>
              <!-- Birthday -->
              <div>
                <label class="form-label">Birthday</label>
                <input type="text" class="form-control flatpickr-input" placeholder="DD/MM/YYYY" value="12/10/1990">
              </div>
              <!-- Save button -->
            </div>
          </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

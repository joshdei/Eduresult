@include('header')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>List of Subject </h4>
                  <div class="card-header-form">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th class="text-center">
                       
                        </th>
                        <th>Subject Name</th>
                        <th>Subject Section</th>
                        <th>Action</th>
                      </tr>

                      @foreach ($data as $item)
                      @if(session('success'))
                    <div class="alert alert-success">
                      {{ session('success') }}
                    </div>
                  @endif
                  
                  @if(session('error'))
                    <div class="alert alert-danger">
                      {{ session('error') }}
                    </div>
                  @endif
                      <tr>
                        <td class="p-0 text-center">
                          
                        </td>
                        <td>{{$item->subject_name}}</td>
                       
                        
                        <td>{{$item->subject_section}}</td>
                      
                        <td>
                            <a href="{{ url('/subject/delete' . $item->id) }}" class="btn btn-outline-primary">Delete</a>
                          </td>
                          
                      </tr>
                      @endforeach
                     
              
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
     
      </div>
@include('footer')
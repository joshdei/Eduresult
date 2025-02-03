@include('header')

<div class="main-content">
  <section class="section">
    <div class="row ">
   
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
                    <a href="{{route('addSubject')}}" class="btn btn-primary mt-2">Add Subject</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
            
                    <a href="{{route('viewsubject')}}" class="btn btn-primary mt-2">View Subject</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
            
                    <a href="{{route('addquestions')}}" class="btn btn-primary mt-2">Add Question</a>
               
              
          
            </div>
          </div>
        </div>
      </div>


      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
            
              <a href="{{route('preview.question')}}" class="btn btn-primary mt-2">Preview</a>
               
              
          
            </div>
          </div>
        </div>
      </div>

    </div>
   
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
       
            <div class="card-header-action w-100 text-end">
              <div class="video-container">
                <video src="intro.mp4" controls class="w-100"></video>
              </div>
              <a href="intro.mp4" download class="btn btn-primary mt-2">Download</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <style>
      .video-container {
        max-width: 100%;
      }
    
      .btn-primary {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        border: none;
        border-radius: 8px;
        background-color: #007bff;
        color: white;
        cursor: pointer;
        transition: 0.3s;
      }
    
      .btn-primary:hover {
        background-color: #0056b3;
      }
    
      @media (max-width: 576px) {
        .card-header {
          flex-direction: column;
          text-align: center;
        }
        
        .card-header-action {
          width: 100%;
          margin-top: 10px;
        }
    
        .btn-primary {
          width: 100%;
        }
      }
    </style>
    
    
   
  </section>
 
</div>
@include('footer')

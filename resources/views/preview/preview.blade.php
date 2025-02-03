@include('header')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Subject: {{ $subject->subject_name }}</h4>
          </div>
          <div class="card-body">
            @if($questions->isEmpty())
              <p>No questions available for this subject.</p>
            @else
              @php
                $groupedQuestions = $questions->sortBy(['section_of_question', 'id'])->groupBy('section_of_question');
              @endphp

              <div class="list-group">
                @foreach($groupedQuestions as $section => $sectionQuestions)
                  <h4 class="mt-3">Section {{ strtoupper($section) }}</h4> <!-- Section Header -->
                  @foreach($sectionQuestions as $question)
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $question->question }}</h5>
                      </div>
                      <div>
                        <strong>Options:</strong>
                        <ul>
                          <li>A: {{ $question->option_a }}</li>
                          <li>B: {{ $question->option_b }}</li>
                          <li>C: {{ $question->option_c }}</li>
                          <li>D: {{ $question->option_d }}</li>
                        </ul>
                      </div>
                    </a>
                  @endforeach
                @endforeach
              </div>
            @endif

            <!-- Button to Download as DOC -->
            <form action="{{ route('downloaddoc') }}" method="post">
              @csrf
              <input type="hidden" name="subject_id" value="{{ $subject->id }}">
              <button type="submit" class="btn btn-outline-success mt-3">Download as DOC</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@include('footer')

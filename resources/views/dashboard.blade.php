@include('header')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12 col-sm-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>Question and Subject Chart</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-9">
                <div id="chart1">
                  <!-- Chart.js Chart -->
                  <canvas id="questionSubjectChart"></canvas>
                </div>
              </div>

              <div class="col-lg-3">
                <div class="row mt-5">
                  <!-- Total Subject Count -->
                  <div class="col-7 col-xl-7 mb-3">Total Subject Count</div>
                  <div class="col-5 col-xl-5 mb-3">
                    <span class="text-big">{{ $subjectCount }}</span>
                  </div>

                  <!-- Total Question Count -->
                  <div class="col-7 col-xl-7 mb-3">Total Questions</div>
                  <div class="col-5 col-xl-5 mb-3">
                    <span class="text-big">{{ $questionCount }}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
// Get data from the Blade variables
const questionCount = {{ $questionCount }};
const subjectCount = {{ $subjectCount }};

// Chart.js setup
const ctx = document.getElementById('questionSubjectChart').getContext('2d');
const questionSubjectChart = new Chart(ctx, {
  type: 'bar', // Bar chart type
  data: {
    labels: ['Questions', 'Subjects'], // X-axis labels
    datasets: [{
      label: 'Count',
      data: [questionCount, subjectCount], // Data points for questions and subjects
      backgroundColor: ['rgba(54, 162, 235, 0.2)', 'rgba(255, 99, 132, 0.2)'], // Bar colors
      borderColor: ['rgba(54, 162, 235, 1)', 'rgba(255, 99, 132, 1)'], // Border colors
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true // Ensures the Y-axis starts at 0
      }
    }
  }
});
</script>

@include('footer')

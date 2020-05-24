@extends('layouts.template')

@section("content")

<div class="row review-row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">COVID 19 Pandemic</h1>
                <img src="resources/img/site/placeholder.jpg" class="img-fluid margin-bot-10" width="100%"/>
                
                <div>
                    <div style="float: left">
                        <h6 class="card-subtitle mb-2 text-muted">
                        Tags: <a href="#">Technology</a>, <a href="#">Gaming</a>
                        </h6>
                    </div>
                    <div style="float: right">
                    <h6 class="card-subtitle mb-2 text-muted">
                    By: <a href='#' style="text-align:right">Author</a>  Date: May 16, 2020
                    </h6>
                    </div>
                </div>

                <p class="card-text" style="margin-top: 10px;">
                <!--- put rich text here -->
                <pre> </pre>&emsp;&emsp;The COVID-19 pandemic, also known as the coronavirus pandemic, is an ongoing pandemic of coronavirus disease 2019 (COVID‑19), caused by severe acute respiratory syndrome coronavirus 2 (SARS‑CoV‑2).[1] The outbreak was first identified in Wuhan, China, in December 2019.[4][6] The World Health Organization declared the outbreak a Public Health Emergency of International Concern on 30 January, and a pandemic on 11 March.[7][8] As of 15 May 2020, more than 4.53 million cases of COVID-19 have been reported in more than 188 countries and territories, resulting in more than 307,000 deaths. More than 1.63 million people have recovered.[5]
                <pre> </pre>&emsp;&emsp;The virus is primarily spread between people during close contact,[c] most often via small droplets produced by coughing,[d] sneezing, and talking.[9][10][12] The droplets usually fall to the ground or onto surfaces rather than travelling through air over long distances.[9] Less commonly, people may become infected by touching a contaminated surface and then touching their face.[9][10] It is most contagious during the first three days after the onset of symptoms, although spread is possible before symptoms appear, and from people who do not show symptoms.[9][10]
                <pre> </pre>&emsp;&emsp;Common symptoms include fever, cough, fatigue, shortness of breath, and loss of smell.[9][13][14] Complications may include pneumonia and acute respiratory distress syndrome.[15] The time from exposure to onset of symptoms is typically around five days, but may range from two to fourteen days.[16][17] There is no known vaccine or specific antiviral treatment.[9] Primary treatment is symptomatic and supportive therapy.[18]
                <pre> </pre>&emsp;&emsp;Recommended preventive measures include hand washing, covering one's mouth when coughing, maintaining distance from other people, wearing a face mask in public settings, and monitoring and self-isolation for people who suspect they are infected.[9][19] Authorities worldwide have responded by implementing travel restrictions, lockdowns, workplace hazard controls, and facility closures. Many places have also worked to increase testing capacity and trace contacts of infected persons.
                <pre> </pre>&emsp;&emsp;The pandemic has caused severe global economic disruption,[20] including the largest global recession since the Great Depression.[21] It has led to the postponement or cancellation of sporting, religious, political and cultural events,[22] widespread supply shortages exacerbated by panic buying,[23][24] and decreased emissions of pollutants and greenhouse gases.[25][26] Schools, universities, and colleges have closed either on a nationwide or local basis in 186 countries, affecting approximately 98.5 per cent of the world's student population.[27] Misinformation about the virus has spread online,[28] and there have been incidents of xenophobia and discrimination against Chinese people and against those perceived as being Chinese, or as being from areas with high infection rates.[29][30][31]                
                </p>
                <a href="https://www.facebook.com/sharer/sharer.php?u=example.org" target="_blank" class="card-link btn fb-share-button">
                    <i class="fab fa-facebook-f" style="margin-right: 5px;"></i> Share on Facebook
                </a>
            </div>
            
        </div>
    </div>
</div>

<div>

<ul class="list-group list-group-horizontal">
  <li class="list-group-item">First item</li>
  <li class="list-group-item">Second item</li>
  <li class="list-group-item">Third item</li>
  <li class="list-group-item">Fourth item</li>
</ul> 

</div>

@endsection
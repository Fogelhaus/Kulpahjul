<template>
  <div class>
    <div class="card text-white border-0">
      <img class="card-img w-100 h-auto" src="https://www.fillmurray.com/1900/700" alt />

      <div class="card-img-overlay d-flex align-items-end container">
        <div class="w-50 mb-3">
          <h1 class="card-title">Våra Tjänster</h1>
          <p
            class="card-text"
          >Vi spelar inte bara in filmer för oss själva. Vi kan bl.a. filma ditt event eller hjälpa dig spela in reklamfilm</p>
        </div>
      </div>
    </div>

    <div class>
      <div class="py-4 container">
        <h2></h2>
        <div class="row">
          <div class="col-sm-6">
            <img class="mh-100 mw-100" src="https://www.fillmurray.com/300/400" alt />
          </div>
          <div class="col-sm-6">
            <h2 class="mt-4 mt-sm-0">Filminspelning</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem aliquam necessitatibus voluptatum omnis similique commodi cumque incidunt, atque, animi harum eos reprehenderit placeat nesciunt, expedita blanditiis corporis rem minima asperiores id amet suscipit. Ad et obcaecati officia, culpa possimus beatae?'</p>
          </div>
          <!-- v-html="homeData[0].body[1].text" -->
        </div>
      </div>
    </div>
    <div class="bg-danger">
      <div class="py-4 container">
        <div class="row">
          <div class="col-sm-8">
            <h2>Inspelning av liveevents</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem aliquam necessitatibus voluptatum omnis similique commodi cumque incidunt, atque, animi harum eos reprehenderit placeat nesciunt, expedita blanditiis corporis rem minima asperiores id amet suscipit. Ad et obcaecati officia, culpa possimus beatae?'</p>
          </div>
          <!-- v-html="homeData[0].body[1].text" -->
          <div class="col-sm-4">
            <img class="mh-100 mw-100" src="https://www.fillmurray.com/300/400" alt />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "services"
};
</script>
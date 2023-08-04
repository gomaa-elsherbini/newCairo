@section ('script')

    <script>
        const address = document.getElementById("address");

        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 8,
                center: { lat: 30.064742, lng: 31.249509},
            });

            const geocoder = new google.maps.Geocoder();
            const infowindow = new google.maps.InfoWindow();

            address.addEventListener("input", () => {
                geocodeLatLng(geocoder, map, infowindow);
            });
        }

        function geocodeLatLng(geocoder, map, infowindow) {
            const latlngStr = address.value.split(",", 2);
            const latlng = {
                lat: parseFloat(latlngStr[0]),
                lng: parseFloat(latlngStr[1]),
            };
            geocoder
                .geocode({ location: latlng })
                .then((response) => {
                    if (response.results[0]) {
                        map.setZoom(11);

                        const marker = new google.maps.Marker({
                            position: latlng,
                            map: map,
                        });

                        infowindow.setContent(response.results[0].formatted_address);
                        infowindow.open(map, marker);
                    } else {
                        window.alert("No results found");
                    }
                })
                .catch((e) => window.alert("Geocoder failed due to: " + e));
        }

        window.initMap = initMap;

    </script>

    <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJbInYcGEiphIv_Xne3uOhTasP181ZwJo&region=EG&language=ar&callback=initMap">
    </script>
@endsection

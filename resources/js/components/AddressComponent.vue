<template>
    <div class="address">
        <p>{{ street_address }}</p>
        <p>{{ city }}{{ (city && region) ? ", " : "" }}{{ region }}</p>
        <p>{{ country }}{{ (country && postcode) ? ", " : "" }}{{ postcode }}</p>
    </div>
</template>

<script>
    export default {
        props: ['street_address', 'city', 'region', 'country', 'postcode'],

        data() {
            return {
                street_address: this.street_address,
                city: this.city,
                region: this.region,
                country: this.country,
                postcode: this.postcode
            }
        }
    }
</script>

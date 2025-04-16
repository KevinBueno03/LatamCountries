<template>
  <div class="country-list">
    <!-- Loading State -->
    <div v-if="loading" class="loading">
      Loading countries...
    </div>

    <!-- Error State -->
     
    <div v-else-if="error" class="error">
      Error loading countries: {{ error }}
    </div>
      
    <!-- Render List -->
    <div v-else>
      <h2>List of Countries</h2>
      <div class="sort-buttons">
         <button class="sort-buttons__button sort-buttons__button--country " @click="sortByCountry('asc')">Sort Country (A-Z)</button>
  <button class="sort-buttons__button sort-buttons__button--country" @click="sortByCountry('desc')">Sort Country (Z-A)</button>
  <button class="sort-buttons__button sort-buttons__button--capital" @click="sortByCapital('asc')">Sort Capital (A-Z)</button>
  <button class="sort-buttons__button sort-buttons__button--capital" @click="sortByCapital('desc')">Sort Capital (Z-A)</button>
      </div>
       <table>
        <thead>
          <tr>
            <th>Country</th>
            <th>Capital</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(item) in sortedCountries" >
            <td>{{ item.Country }}</td>
            <td>{{ item.Capital }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CountryList',
  data() {
    return {
      countries: [],    // Array to hold country data
      sortedCountries: [],
      loading: true,    // Loading state
      error: null       // Error state
    }
  },
 methods: {
    sortByCountry(order) {
      this.sortedCountries = [...this.countries].sort((a, b) => {
        const nameA = a.Country?.toLowerCase() ;
        const nameB = b.Country?.toLowerCase() ;
        return order === 'asc' 
          ? nameA.localeCompare(nameB)
          : nameB.localeCompare(nameA);
      });
    },
    sortByCapital(order) {
      this.sortedCountries = [...this.countries].sort((a, b) => {
        const capitalA = a.Capital?.toLowerCase() ;
        const capitalB = b.Capital?.toLowerCase() ;
        return order === 'asc'
          ? capitalA.localeCompare(capitalB)
          : capitalB.localeCompare(capitalA);
      });
    }
  },

  async mounted() {
    try {
      // Fetch data from API
      const response = await fetch('http://localhost/LatamCountries/wp-json/wp/v2/country');
      const data = await response.json();
      console.log(data);
      this.countries = await data.map(item => item.acf);
      this.sortedCountries = [...this.countries];
      console.log(data[0].acf);
      console.log("llega")
    } catch (err) {
      this.error = err.message;
    } finally {
      this.loading = false;
    }
  }
}
</script>

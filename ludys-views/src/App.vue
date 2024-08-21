<template>
  <div id="app">
    <v-container>
      <v-card>
        <v-tabs
          v-model="tab"
          bg-color="#E58045"
          color="black"
          stacked
          grow
        >
          <v-tab value="invoices">
            <v-icon class="invoice-icon" />

            Facturacion
          </v-tab>
          <v-tab value="clients">
            <v-icon class="client-icon" />

            Clientes
          </v-tab>
          <v-tab value="reports">
            <v-icon class="report-icon" />

            Reportes
          </v-tab>
        </v-tabs>

        <v-card-text>
          <v-window v-model="tab">
            <v-window-item value="invoices">
              <InvoicesTab/>
            </v-window-item>

            <v-window-item value="clients">
              <ClientsTab/>
            </v-window-item>
            <v-window-item value="reports">
              <ReportsTab/>
            </v-window-item>
          </v-window>
        </v-card-text>
      </v-card>
    </v-container>
  </div>
</template>

<script>
import 'vuetify/styles'
import InvoicesTab from './components/InvoicesTab'
import ClientsTab from './components/ClientsTab'
import ReportsTab from './components/ReportsTab'

export default {
  name: 'App',
  components: {
    InvoicesTab,
    ClientsTab,
    ReportsTab
  },
  data: () => ({
    tab: 'invoices'
  }),
}

</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
}

.invoice-icon {
  background: url(/public/invoice-text-edit.svg);
}

.client-icon {
  background: url(/public/account-group.svg);
}

.report-icon {
  background: url(/public/file-chart.svg);
}
</style>

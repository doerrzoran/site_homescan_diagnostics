import { createApi, fetchBaseQuery } from "@reduxjs/toolkit/query/react"

export const ApiSlice = createApi({
    reducerPath: 'Api',
    baseQuery: fetchBaseQuery({ baseUrl: 'https://192.168.1.21:8000'}),
    endpoints: (builder) => ({
        updateHomePage: builder.mutation({
            query: (updatedData) => ({
              url: `/home/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateContacts: builder.mutation({
            query: (updatedData) => ({
              url: `/contacts/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateIntervention: builder.mutation({
            query: (updatedData) => ({
              url: `/intervention/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateSociety: builder.mutation({
            query: (updatedData) => ({
              url: `/society/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateMissions: builder.mutation({
            query: (updatedData) => ({
              url: `/missions/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateDta: builder.mutation({
            query: (updatedData) => ({
              url: `/d/t/a/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateCrep: builder.mutation({
            query: (updatedData) => ({
              url: `/c/r/e/p/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateCarrez: builder.mutation({
            query: (updatedData) => ({
              url: `/carrez/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateAsbestos: builder.mutation({
            query: (updatedData) => ({
              url: `/asbestos/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateDPE: builder.mutation({
            query: (updatedData) => ({
              url: `/d/p/e/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateTermites: builder.mutation({
            query: (updatedData) => ({
              url: `/termites/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateElectricity: builder.mutation({
            query: (updatedData) => ({
              url: `/electricity/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateGaz: builder.mutation({
            query: (updatedData) => ({
              url: `/gaz/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateEnergy: builder.mutation({
            query: (updatedData) => ({
              url: `/energy/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateERP: builder.mutation({
            query: (updatedData) => ({
              url: `/e/r/p/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateRAAT: builder.mutation({
            query: (updatedData) => ({
              url: `/r/a/a/t/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateDPAT: builder.mutation({
            query: (updatedData) => ({
              url: `/d/p/a/t/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateDTAT: builder.mutation({
            query: (updatedData) => ({
              url: `/d/t/a/t/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateDPAD: builder.mutation({
            query: (updatedData) => ({
              url: `/d/p/a/d/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateDTAD: builder.mutation({
            query: (updatedData) => ({
              url: `/d/t/a/d/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
        updateDAAD: builder.mutation({
            query: (updatedData) => ({
              url: `/d/a/a/d/update`, 
              method: 'POST', 
              body: updatedData,
            }),
        }),
    })
})

export const { 
    useUpdateHomePageMutation,
    useUpdateContactsMutation,
    useUpdateInterventionMutation,
    useUpdateSocietyMutation,
    useUpdateMissionsMutation,
    useUpdateDtaMutation,
    useUpdateCrepMutation,
    useUpdateCarrezMutation,
    useUpdateAsbestosMutation,
    useUpdateDPEMutation,
    useUpdateTermitesMutation,
    useUpdateElectricityMutation,
    useUpdateGazMutation,
    useUpdateEnergyMutation,
    useUpdateERPMutation,
    useUpdateRAATMutation,
    useUpdateDPATMutation,
    useUpdateDTATMutation,
    useUpdateDPADMutation,
    useUpdateDTADMutation,
    useUpdateDAADMutation
} = ApiSlice
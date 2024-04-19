import { createApi, fetchBaseQuery } from "@reduxjs/toolkit/query/react"

export const ApiSlice = createApi({
    reducerPath: 'Api',
    baseQuery: fetchBaseQuery({ baseUrl: 'https://192.168.1.21:8000'}),
    endpoints: (builder) => ({
        getHome : builder.query({
            query : () => ({
                url: '/home',
            })
        }),
        getSociety : builder.query({
            query : () => ({
                url: '/society',
            })
        }),
        getMissions : builder.query({
            query : () => ({
                url: '/missions',
            })
        }),
        getContacts : builder.query({
            query : () => ({
                url: '/contacts',
            })
        }),
        getInterventionSector : builder.query({
            query : () => ({
                url: '/intervention/sector',
            })
        }),
        getEstimate : builder.query({
            query : () => ({
                url: '/estimate',
            })
        }),
        getSkills : builder.query({
            query : () => ({
                url: '/skills',
            })
        }),
        getAssets : builder.query({
            query : () => ({
                url: '/assets',
            })
        }),
        getCondominium : builder.query({
            query : () => ({
                url: '/condominium',
            })
        }),
        getPreSell : builder.query({
            query : () => ({
                url: '/pre/sell',
            })
        }),
        getPreRent : builder.query({
            query : () => ({
                url: '/pre/rent',
            })
        }),
        getPreConstructionLead : builder.query({
            query : () => ({
                url: '/pre/construction/lead',
            })
        }),
        getPreConstructionAbsestos : builder.query({
            query : () => ({
                url: '/pre/construction/asbesos',
            })
        }),
        getPreConstructionTermites : builder.query({
            query : () => ({
                url: '/pre/construction/termites',
            })
        }),
        getPostConstruction : builder.query({
            query : () => ({
                url: '/post/construction',
            })
        }),
        getPreDestruction : builder.query({
            query : () => ({
                url: '/pre/destruction',
            })
        }),
        getPreDestructionAsbestos : builder.query({
            query : () => ({
                url: '/pre/des/asbestos',
            })
        }),
        getPreDestructionTermites : builder.query({
            query : () => ({
                url: '/pre/des/termites',
            })
        }),
        getDPE : builder.query({
            query : () => ({
                url: '/d/p/e',
            })
        }),
        getDTA : builder.query({
            query : () => ({
                url: '/d/t/a',
            })
        }),
        getElectricity : builder.query({
            query : () => ({
                url: '/electricity',
            })
        }),
        getGaz : builder.query({
            query : () => ({
                url: '/gaz',
            })
        }),
        getLead : builder.query({
            query : () => ({
                url: '/lead',
            })
        }),
        getTermites : builder.query({
            query : () => ({
                url: '/termites',
            })
        }),
        getERP: builder.query({
            query : () => ({
                url: '/e/r/p',
            })
        }),
        getEnergy: builder.query({
            query : () => ({
                url: '/energy/estimate',
            })
        }),
        getCarrez: builder.query({
            query : () => ({
                url: '/carrez',
            })
        }),
        getAsbestos: builder.query({
            query : () => ({
                url: '/asbestos',
            })
        }),
    })
})

export const { 
    useGetHomeQuery,
    useGetContactsQuery,
    useGetInterventionSectorQuery, 
    useGetEstimateQuery,
    useGetSkillsQuery,
    useGetAssetsQuery ,
    useGetCondominiumQuery,
    useGetPreSellQuery,
    useGetPreRentQuery,
    useGetPreConstructionLeadQuery,
    useGetPreConstructionAbsestosQuery,
    useGetPreConstructionTermitesQuery,
    useGetPostConstructionQuery,
    useGetPreDestructionQuery,
    useGetPreDestructionAsbestosQuery,
    useGetPreDestructionTermitesQuery,
    useGetDPEQuery,
    useGetDTAQuery,
    useGetElectricityQuery,
    useGetERPQuery,
    useGetGazQuery,
    useGetEnergyQuery,
    useGetLeadQuery,
    useGetSocietyQuery,
    useGetMissionsQuery,
    useGetTermitesQuery,
    useGetCarrezQuery,
    useGetAsbestosQuery,
} = ApiSlice
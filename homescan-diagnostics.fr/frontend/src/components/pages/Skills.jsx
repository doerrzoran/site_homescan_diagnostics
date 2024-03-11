import { useGetSkillsQuery } from "../../slices/ApiSlice"

export default function Skills() {
    const { data, isLoading} = useGetSkillsQuery()
    
    return(
        <>
            <div>
                {
                    isLoading ? <p>is loading</p>:
                    <div>

                        <h1>
                            {
                                data.title
                            }
                        </h1>
                        <p>
                            {
                                data.text
                            }
                        </p>
                    </div>
                }
            </div>
        </>
    )
}

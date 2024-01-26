import { useEffect } from "react"
import { useGetHomeQuery } from "../slices/ApiSlice"

export default function Home() {
    const { data, isLoading } = useGetHomeQuery()

    useEffect(() => {
        console.log(data)
    })
    return(
        <article>
            <h1>
            {
                isLoading ? <p>En Charge</p>:
                <p>
                    {
                        data.title
                    }
                </p>
            }
            </h1>
            <h3>
            {
                isLoading ? <p>En Charge</p>:
                <p>
                    {
                        data.subTitle
                    }
                </p>
            }
            </h3>
            <div>
                {
                    isLoading ? <p>En Charge</p>:
                    <p>
                        {
                            data.message
                        }
                    </p>
                }
            </div>
        </article>
    )
}

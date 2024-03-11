import { useEffect } from "react"
import { useGetHomeQuery } from "../slices/ApiSlice"

export default function Home() {
    const { data, isLoading } = useGetHomeQuery()


    return(
        <>
        {isLoading ? <p>En Charge</p>:
            <article style= {{ background: `url(${data.image})` }}>
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
}
        </>
    )
}

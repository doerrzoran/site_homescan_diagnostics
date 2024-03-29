import { useEffect, useState } from "react";
import { useUpdateContactsMutation } from "../../../slices/UpdateSlice";
import { useGetContactsQuery } from "../../../slices/ApiSlice";

export default function ContactsUpdate(params) {
    const { data, loading } = useGetContactsQuery()
    const [newEmail, setNewEmail] = useState(data?.mail ?? '')
    const [newPhoneNumber, setNewPhoneNumber] = useState(data?.phoneNumber ?? '')
    const [updateContacts, { isLoading, isError }] = useUpdateContactsMutation()

    useEffect(() => {
        if (data && data.mail) {
            setNewEmail(data.mail);
        }
        if (data && data.phoneNumber) {
            setNewPhoneNumber(data.phoneNumber);
        }
    }, [data]);

    const handleSubmit = (e) => {
        e.preventDefault();
        updateContacts({ 
            email: newEmail,
            phoneNumber: newPhoneNumber, 
        }); // Call the mutation with the new email
        setNewEmail(newEmail); // Clear the input field after submitting
        setNewPhoneNumber(newPhoneNumber);
         // Clear the input field after submitting
    };

  return (
    <div className="container">
    <div>
        <h2>modifier la page de contacts</h2>
        <form onSubmit={handleSubmit} className="mt-3">
            <div className="form-group">
                <label htmlFor="newEmail">email:</label>
                <input
                    type="text"
                    className="form-control"
                    id="newEmail"
                    value={newEmail}
                    onChange={(e) => setNewEmail(e.target.value)}
                />
            </div>
            <div className="form-group">
                <label htmlFor="newPhoneNumber">telephone:</label>
                <input
                    type="tel"
                    className="form-control"
                    id="newPhoneNumber"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required
                    value={newPhoneNumber}
                    onChange={(e) => setNewPhoneNumber(e.target.value)}
                />    
            </div>
            <button type="submit" className="btn btn-primary" disabled={isLoading}>
                {isLoading ? 'Modification en cours...' : 'Éditer'}
            </button>
            {isError && <p className="text-danger">Error updating email.</p>}
        </form>
    </div>
</div>

  );
}

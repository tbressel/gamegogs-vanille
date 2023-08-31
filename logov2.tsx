import Image from 'next/image';
import styles from '../styles/components/logov2.module.scss'

export function Logo_v2() {
    return (

        <div className={styles.logo__container}>
            <div className={styles.logo__image}>
                <Image src="/logo-gamgogs.png" alt="logo-gamgogs" width={200} height={200} />
            </div>

            <div className={styles.logo__subcontainer}>

                <div className={styles.logo__title}>
                    <h3>gamegogs</h3>
                </div>
                <div className={styles.logo__hook}>
                    <p>
                    &quot;la chasse aux trésors&quot;
                    </p>
                </div>
            </div>
        </div>

    )
}
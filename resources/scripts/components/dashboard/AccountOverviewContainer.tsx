import { useLocation } from 'react-router-dom';



import MessageBox from '@/components/MessageBox';
import ConfigureTwoFactorForm from '@/components/dashboard/forms/ConfigureTwoFactorForm';
import UpdateEmailAddressForm from '@/components/dashboard/forms/UpdateEmailAddressForm';
import UpdatePasswordForm from '@/components/dashboard/forms/UpdatePasswordForm';
import ContentBox from '@/components/elements/ContentBox';
import PageContentBlock from '@/components/elements/PageContentBlock';



import Code from '../elements/Code';
import { useRef } from "react";


export default () => {
    const { state } = useLocation();
    const pRef = useRef<HTMLParagraphElement | null>(null);

    return (
        <PageContentBlock title={'Your Settings'}>
            <h1 className='text-[52px] font-extrabold leading-[98%] tracking-[-0.14rem] mb-8'>Twoje Ustawienia</h1>
            {state?.twoFactorRedirect && (
                <MessageBox title={'2-Factor Required'} type={'error'}>
                    Aby kontynuować, konto musi mieć włączone uwierzytelnianie dwuskładnikowe.
                </MessageBox>
            )}

            <div className='flex flex-col w-full h-full gap-4'>
                <h2 className='mt-8 font-extrabold text-2xl'>Informacje o koncie</h2>
                <ContentBox title={'Adres Email'} showFlashes={'account:email'}>
                    <UpdateEmailAddressForm />
                </ContentBox>
                <h2 className='mt-8 font-extrabold text-2xl'>Hasło i uwierzytelnianie</h2>
                <ContentBox title={'Hasło do konta'} showFlashes={'account:password'}>
                    <UpdatePasswordForm />
                </ContentBox>
                <ContentBox title={'Uwierzytelnianie wieloskładnikowe'}>
                    <ConfigureTwoFactorForm />
                </ContentBox>
                <h2 className='mt-8 font-extrabold text-2xl'>Aplikacja</h2>
                <ContentBox title={'Wersja Panelu'}>
                    <p className='text-sm mb-4'>
                        Jest to przydatne, aby zapewnić kapibarze, jeśli napotkasz nieoczekiwany problem.</p>
                    <p className='text-sm mb-5' ref={pRef}>Jebać Dawida Harabina, kochać Kapibare</p>
                    <div className='flex flex-col gap-4'>
                        <Code>{import.meta.env.VITE_PYRODACTYL_VERSION}</Code>
                        <Code>
                            Build {import.meta.env.VITE_PYRODACTYL_BUILD_NUMBER}, Commit{' '}
                            {import.meta.env.VITE_COMMIT_HASH.slice(0, 7)}
                        </Code>
                    </div>
                </ContentBox>
            </div>
        </PageContentBlock>
    );
};

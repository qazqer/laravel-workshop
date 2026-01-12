import { PageProps as InertiaPageProps } from '@inertiajs/core';
import { AxiosInstance } from 'axios';
import ziggyRoute, { Config as ZiggyConfig } from 'ziggy-js';

declare global {
    interface Window {
        axios: AxiosInstance;
    }

    var route: typeof ziggyRoute;
    var Ziggy: ZiggyConfig;
}

declare module '@inertiajs/core' {
    interface PageProps extends InertiaPageProps {
        auth: {
            user: {
                id: number;
                name: string;
                email: string;
                profile: {
                    avatar_url: string;
                    display_name: string;
                    handle: string;
                };
            };
        };
    }
}

declare module '@vue/runtime-core' {
    interface ComponentCustomProperties {
        route: typeof ziggyRoute;
    }
}
